<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
use Cake\ORM\TableRegistry;

class BaiVietController extends AppController
{

    public function index()
    {
        $table = TableRegistry::getTableLocator()->get('BaiViet');

        $keyword = 'Bóng đá';
        $where = [
            'tieu_de LIKE' => "%$keyword%",
        ];
        $fields = ['id', 'tieu_de'];
        
        $records = $table->find()
        ->where($where)
        ->limit(5)
        ->select($fields)
        ->orderBy('id ASC')
        ->toArray();

        $this->set('records', $records);
    }

    public function view($id = null)
    {
        $baiViet = $this->BaiViet->get($id, contain: ['DanhMucBaiViet']);
        $this->set(compact('baiViet'));
    }

    public function add()
    {
        $baiViet = $this->BaiViet->newEmptyEntity();
        if ($this->request->is('post')) {
            $baiViet = $this->BaiViet->patchEntity($baiViet, $this->request->getData());
            if ($this->BaiViet->save($baiViet)) {
                $this->Flash->success(__('The bai viet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bai viet could not be saved. Please, try again.'));
        }
        $danhMucBaiViet = $this->BaiViet->DanhMucBaiViet->find('list', limit: 200)->all();
        $this->set(compact('baiViet', 'danhMucBaiViet'));
    }

    public function edit($id = null)
    {
        $baiViet = $this->BaiViet->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $baiViet = $this->BaiViet->patchEntity($baiViet, $this->request->getData());
            if ($this->BaiViet->save($baiViet)) {
                $this->Flash->success(__('The bai viet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bai viet could not be saved. Please, try again.'));
        }
        $danhMucBaiViet = $this->BaiViet->DanhMucBaiViet->find('list', limit: 200)->all();
        $this->set(compact('baiViet', 'danhMucBaiViet'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bai Viet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $baiViet = $this->BaiViet->get($id);
        if ($this->BaiViet->delete($baiViet)) {
            $this->Flash->success(__('The bai viet has been deleted.'));
        } else {
            $this->Flash->error(__('The bai viet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function save()
    {
        $data = $this->request->getData();

        $table = TableRegistry::getTableLocator()->get('BaiViet');

        // $data_save = [];
        $entity = $table->newEntity($data);

        $save = $table->save($entity);
        // debug($save);
        // die('1');
    }
}
