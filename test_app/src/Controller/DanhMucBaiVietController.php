<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DanhMucBaiViet Controller
 *
 * @property \App\Model\Table\DanhMucBaiVietTable $DanhMucBaiViet
 */
class DanhMucBaiVietController extends AppController
{

    public function index()
    {
        $query = $this->DanhMucBaiViet->find();
        $danhMucBaiViet = $this->paginate($query);

        $this->set(compact('danhMucBaiViet'));
    }

   
    public function view($id = null)
    {
        $danhMucBaiViet = $this->DanhMucBaiViet->get($id, 
            ['contain' => ['BaiViet']]);
        $this->set(compact('danhMucBaiViet'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $danhMucBaiViet = $this->DanhMucBaiViet->newEmptyEntity();
        if ($this->request->is('post')) {
            $danhMucBaiViet = $this->DanhMucBaiViet->patchEntity($danhMucBaiViet, $this->request->getData());
            if ($this->DanhMucBaiViet->save($danhMucBaiViet)) {
                $this->Flash->success(__('The danh muc bai viet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The danh muc bai viet could not be saved. Please, try again.'));
        }
        $baiViet = $this->DanhMucBaiViet->BaiViet->find('list', limit: 200)->all();
        $danhMucCha = $this->DanhMucBaiViet->find('list', ['keyField' => 'id', 'valueField' => 'ten_danh_muc'])->all();
        $this->set(compact('danhMucBaiViet', 'baiViet', 'danhMucCha'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Danh Muc Bai Viet id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $danhMucBaiViet = $this->DanhMucBaiViet->get($id, ['contain' => ['BaiViet']]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            // Cập nhật dữ liệu từ form
            $danhMucBaiViet = $this->DanhMucBaiViet->patchEntity($danhMucBaiViet, $this->request->getData());

            // Xử lý xóa bài viết nếu cần
            if (isset($this->request->getData()['bai_viet_to_delete'])) {
                $baiVietToDelete = $this->DanhMucBaiViet->BaiViet->get($this->request->getData()['bai_viet_to_delete']);
                if ($this->DanhMucBaiViet->BaiViet->delete($baiVietToDelete)) {
                    $this->Flash->success(__('The bài viết has been deleted.'));
                } else {
                    $this->Flash->error(__('The bài viết could not be deleted. Please, try again.'));
                }
            }

            // Lưu danh mục
            if ($this->DanhMucBaiViet->save($danhMucBaiViet)) {
                $this->Flash->success(__('The danh muc bai viet has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The danh muc bai viet could not be saved. Please, try again.'));
        }

        $baiViet = $this->DanhMucBaiViet->BaiViet->find('list', ['limit' => 200])->all();
        $danhMucCha = $this->DanhMucBaiViet->find('list', ['keyField' => 'id', 'valueField' => 'ten_danh_muc'])->all();
        $this->set(compact('danhMucBaiViet', 'baiViet', 'danhMucCha'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Danh Muc Bai Viet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        try {
            $danhMucBaiViet = $this->DanhMucBaiViet->get($id);
            
            if ($this->DanhMucBaiViet->delete($danhMucBaiViet)) {
                $this->Flash->success(__('The danh muc bai viet has been deleted.'));
            } else {
                // Nếu không xóa được mà không có lỗi rõ ràng
                $this->Flash->error(__('The danh muc bai viet could not be deleted. Please, try again.'));
            }
        } catch (\Cake\Datasource\Exception\RecordNotFoundException $e) {
            $this->Flash->error(__('Record not found. The danh muc bai viet could not be deleted.'));
        } catch (\Exception $e) {
            // Bắt các lỗi khác (như lỗi từ cơ sở dữ liệu)
            $this->Flash->error(__('An error occurred while deleting the danh muc bai viet: ' . $e->getMessage()));
        }

        return $this->redirect(['action' => 'index']);
    }

}
