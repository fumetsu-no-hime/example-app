<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
         /**
     * The storage format of the model's date columns.
     *指定哪一張表
     * @var string
     */
    protected $table = 'news';

     /**
     * The primary key associated with the table.
     *這表示 'news' 資料表的主鍵是使用 'id' 欄位。主鍵是資料表中唯一識別每個記錄的方式，並在關聯和資料查詢中扮演重要角色。這個設定讓 Eloquent ORM 知道該使用哪個欄位作為每條記錄的主鍵。
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *白名單 => 定義哪些欄位可以放資料。
     * @var array
     */
    protected $fillable = ['created_at','img_path','title','content'];
}
