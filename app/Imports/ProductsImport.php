<?php

namespace App\Imports;

use App\Product;
use App\Imports\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');
class ProductsImport implements ToCollection, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */



    public function collection(Collection   $rows)
    {
        foreach ($rows as $row) {
            Product::updateOrCreate(
                ['product_code' => $row['Sku parent']],
                [
                    'product_code' => $row[$_POST['form_product_code']] ?? $row['Sku parent'] ?? null,
                    'product_name' => $row['Product name'] ?? $row[$_POST['form_product_name']] ?? null,
                    'short_description' => $row['Short description'] ?? $row['Short description'] ?? $row[$_POST['form_short_description']] ?? null,
                    'full_description' => $row['Description'] ?? $row['Long description'] ?? $row['Explicacion'] ?? $row[$_POST['form_description']] ?? null,
                    'price' => $row[$_POST['form_price']] ?? $row['Price'] ?? $row['price'] ?? $row['Sm price']?? null,
                    'special_price' => $row[$_POST['form_price']] ?? $row['Price'] ?? $row['price'] ?? $row['Sm price'] ?? null,
                    'meta_keyword' => $row['Meta keywords'] ?? $row['Metakeywords'] ?? $row[$_POST['form_meta_keywords']] ?? null,
                    'meta_description' => $row['Meta description'] ?? $row[$_POST['form_meta_keywords']] ?? null,
                    'page_title' => $row['Page title'] ?? $row['Product name'] ?? $row[$_POST['form_product_name']] ?? null,
                    'main_image' => $row[$_POST['form_main_image']] ?? $row['Detailed image'] ?? $row['Main image'] ?? null,
                    'note' => 'n/a',
                    'state_id' => 0,
//                    'language' => $row['Language'] ?? 'en' ?? null,
//                    'Pdr' => $row['PDR'] ?? $row['Pdr'] ?? $row['pdr'] ?? null,
//                    'category' => $row[$_POST['form_category']] ?? $row['Category'] ?? null,
//                    'weight' => $row[$_POST['form_weight']] ?? $row['Weight lbs'] ?? null,
//                    'quantity' => $row[$_POST['form_quantity']] ?? $row['Qty inventory'] ?? null,
//                    'configurable_type' => $row['Configurable Type'] ?? $row['Configurable type'] ?? $row['configurable type'] ?? null,
//                    'vendor' => $row['Vendor'] ?? 'Default' ?? null,
//                    'brand' => $row['Brand'] ?? null,
//            'aditional_column_name' => '"'.$_POST['fields_aditional1'].','
//                .'"'.$_POST['fields_aditional2'].','
//                .'"'.$_POST['fields_aditional3'].','
//                .'"'.$_POST['fields_aditional4'].','
//                .'"'.$_POST['fields_aditional5'].'"'
//                ?? null,
//                'aditional_column_value' => '"' .$row[$_POST['form_aditional_1']].','
//                    .'"'.$row[$_POST['form_aditional_2']].','
//                    .'"'.$row[$_POST['form_aditional_3']].','
//                    .'"'.$row[$_POST['form_aditional_4']].','
//                    .'"'.$row[$_POST['form_aditional_5']].'"'
//                    ?? null,
//                    'tax' => $row['Tax'] ?? $row['tax'] ?? $row['Taxes'] ?? $row['taxes'] ?? 0,
//                    'shipping' => $row['Shipping'] ?? $row['shipping'] ?? $row['Shippings'] ?? $row['ship'] ?? 0,
//                    'status_edit' => 0,
//                    'user_id' => $_POST['form_user_id'],
                ]);
        }
    }
}
