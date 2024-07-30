CREATE TABLE danh_muc_bai_viet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_danh_muc VARCHAR(255) NOT NULL,
    ten_danh_muc_cha INT,
    anh_chinh VARCHAR(255),
    FOREIGN KEY (ten_danh_muc_cha) REFERENCES danh_muc_bai_viet(id)
);
CREATE TABLE bai_viet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tieu_de VARCHAR(255) NOT NULL,
    danh_muc_id INT,
    luot_xem INT DEFAULT 0,
    bai_viet_noi_bat BOOLEAN DEFAULT FALSE,
    anh_chinh VARCHAR(255),
    hien_thi_muc_luc BOOLEAN DEFAULT FALSE,
    mo_ta_ngan TEXT,
    noi_dung TEXT,
    the_bai_viet TEXT,
    album_anh TEXT,
    tep_dinh_kem TEXT,
    duong_dan_video_youtube VARCHAR(255),
    duong_dan VARCHAR(255),
    tieu_de_seo VARCHAR(255),
    tu_khoa_seo TEXT,
    FOREIGN KEY (danh_muc_id) REFERENCES danh_muc_bai_viet(id)
);

CREATE TABLE danh_muc_bai_viet_bai_viet (
    danh_muc_id INT,
    bai_viet_id INT,
    PRIMARY KEY (danh_muc_id, bai_viet_id),
    FOREIGN KEY (danh_muc_id) REFERENCES danh_muc_bai_viet(id),
    FOREIGN KEY (bai_viet_id) REFERENCES bai_viet(id)
);
