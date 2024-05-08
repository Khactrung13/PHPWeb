<?php
    session_start();
    include "SanPhamController.php"; 
    //them so luong
    if(isset($_GET['cong'])){
        $id=$_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham' =>$cart_item['tensanpham'],'id'=>$cart_item['id'],
                'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
                'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] +1;
                if($cart_item['soluong']<10){
                    $product[]=array('tensanpham' =>$cart_item['tensanpham'],'id'=>$cart_item['id'],
                    'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],
                    'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }else{
                    $product[]=array('tensanpham' =>$cart_item['tensanpham'],'id'=>$cart_item['id'],
                    'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
                    'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header('Location:../index.php?ql=giohang');
    }
    //tru so luong san pham
    if(isset($_GET['tru'])){
        $id=$_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham' =>$cart_item['tensanpham'],'id'=>$cart_item['id'],
                'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
                'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] - 1;
                if($cart_item['soluong']>1){
                    $product[]=array('tensanpham' =>$cart_item['tensanpham'],'id'=>$cart_item['id'],
                    'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],
                    'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }else{
                    $product[]=array('tensanpham' =>$cart_item['tensanpham'],'id'=>$cart_item['id'],
                    'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
                    'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header('Location:../index.php?ql=giohang');
    }
    //xoa sp 
    if(isset($_SESSION['cart']) && isset($_GET['xoa'])){    
        $id=$_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham' =>$cart_item['tensanpham'],'id'=>$cart_item['id'],
                        'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
                        'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
            }
        $_SESSION['cart'] = $product;
       
        header('Location:../index.php?ql=giohang');
        }
        $_SESSION['soluong']=  $_SESSION['soluong']-1;
    }
    //xoa tat ca
    if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        unset($_SESSION['soluong']);

        header('Location:../index.php?ql=giohang');
    }
    //then sp vao gio hang 
    if(isset($_POST['themgiohang'])){
        //$_SESSION['soluong']=0;
        $id=$_GET['idsanpham'];
        $soluong = 1;
        $sanpham = ChiTietSanPham($id);
            $new_product = array(array('tensanpham' =>$sanpham->tensanpham,'id'=>$id,
            'soluong'=>$soluong,'giasp'=>$sanpham->giasp,
            'hinhanh'=>$sanpham->hinhanh,'masp'=>$sanpham->id_sanpham));
            //$_SESSION['soluong']=$_SESSION['soluong']+1;
            //kiemtra gio hang ton tai 
            if(isset($_SESSION['cart'])){
                $found =false;
                foreach($_SESSION['cart'] as $cart_item){
                    if($cart_item['id']==$id){
                        $product[]=array('tensanpham' =>$cart_item['tensanpham'],'id'=>$cart_item['id'],
                        'soluong'=>$cart_item['soluong']+1,'giasp'=>$cart_item['giasp'],
                        'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                        $_SESSION['cart'] = $product;
                        $found=true;

                    }else{
                        $product[]= array('tensanpham' =>$cart_item['tensanpham'],'id'=>$cart_item['id'],
                        'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
                        'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                        $_SESSION['cart'] = array_merge($product,$new_product);
                       
                    }
                }
                $_SESSION['soluong']=count($_SESSION['cart']);;
               
            }else{
                $_SESSION['soluong']=1;
                $_SESSION['cart']= $new_product;
            }
        header('Location:../index.php?ql=giohang');

    }

?>