<?php
   $this->Rita->setPageCaption('مدیریت برنامه‌ها')
   ->setPageCaption('برنامه')
   ->setPageCaption('ویرایش');
   $this->Rita->setPageNote('شما همکنون می‌توانید سایر فیلد‌های مورد نیاز را تکمیل نمایید.');
   
   //$deadline = is_object($Program->deadline)? $Program->deadline->i18nFormat("yyyy-MM-dd",null, 'en_IR') : null;
   //$event = is_object($Program->event)? $Program->event->i18nFormat("yyyy-MM-dd",null, 'en_IR') : null;
   
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($Program); ?>
       
		<div class="body-container ">
            <div class="group-inputs">   
            <?=  $this->Form->input('title',['label' => 'عوان برنامه']); ?>
                <div class="form-col">
                    <?= $this->Form->input('category_id', ['options' => $Categories, 'label' => 'گروه', 'empty' => '[انتخاب کنید]']); ?>            
                    <?= $this->Form->input('type_id', ['options' => $Types, 'label' => 'فعالیت', 'empty' => '[انتخاب کنید]']); ?>
                </div>
            </div>
            <div class="group-inputs">                            
 <?= $this->Form->time('test2', [
            'timeFormat' => 12,
            'interval' => 5,
            'value' => ['hour' => '4', 'minute' => '30', 'meridian' => 'pm']
        ]); ?>               
                    <?=  $this->Form->input('price',['label' => 'هزینه'] )?>
                
                <div class="form-col">
                    <?=  $this->Form->input('supervior_id',['options' => $Superviors, 'label' => 'سرپرست', 'empty' => '[انتخاب کنید]']);; ?>
                    <?=  $this->Form->input('status', ['options' => $status]); ?>
                </div>
                <div class="form-col">

                     <?=  $this->Form->input('event', ['label' => 'تاریخ برنامه']); ?>
                     <?php  //$this->Form->input('deadline', ['label' => 'تاریخ ثبت نام']); ?>
                     <?=  $this->Form->input('deadline', ['label' => 'deadline -' .\Cake\I18n\Time::getDefaultLocale()]); ?>
                </div>
                
            </div>
            <div class="group-inputs" style="direction: ltr;">                               
            
<?php
        $type = 'datetime';
 

echo $this->Form->input('deadline1', [
    'label' => 'deadline( en_us > America/Sao_Paulo  ) ',
    'locale' => 'en_US',
    'type' => $type ,
    'value' => $Program->deadline,
    'timezone'=>'America/Sao_Paulo',
]); 
echo $this->Form->input('deadline11', [
    'label' => 'deadline( en_us > America/Sao_Paulo / no value  ) ',
    
    'type' => $type ,
    
]); 

echo $this->Form->input('deadline2', [
    'label' => 'deadline( ps_af > Asia/Kabul ) ',
    'locale' => 'ps_AF',
    'timezone'=>'Asia/Kabul',
    'value' => $Program->deadline,
    'type' => $type ,
]); 

echo $this->Form->input('deadline2', [
    'label' => 'deadline( false > Asia/Kabul ) ',
    'locale' => false,
    'value' => $Program->deadline,
    'type' => $type ,
]);

//echo $this->Form->input('deadline3', [
//    'label' => 'deadline( fa_AF > Asia/Tehran ) ',
//    'locale' => 'fa_AF',
//    'timezone'=>'Asia/Tehran',
//    'value' => $Program->deadline,
//    'type' => $type ,
//]); 
//
//echo $this->Form->input('deadline4', [
//    'label' => 'deadline( th_TH > Asia/Tehran ) ',
//    'locale' => 'th_TH',
//    'timezone'=>'Asia/Tehran',
//    'value' => $Program->deadline,
//    'type' => $type ,
//]);      
//
//echo $this->Form->input('deadline2', [
//    'label' => 'deadline( es_ES > Asia/Tehran ) ',
//    'locale' => 'es_ES',
//    'timezone'=>'Asia/Tehran',
//    'value' => $Program->deadline,
//    'type' => $type ,
//]);      
//
//echo $this->Form->input('deadline2', [
//    'label' => 'deadline( hi_IN > Asia/Tehran ) ',
//    'locale' => 'hi_IN',
//    'timezone'=>'Asia/Tehran',
//    'value' => $Program->deadline,
//    'type' => $type ,
//]); 
echo $this->Form->input('deadline2', [
    'label' => 'deadline( fa_IR@calendar=islamic > Asia/Tehran ) ',
    'locale' => 'fa_IR@calendar=islamic',
    'timezone'=>'Asia/Tehran',
    'value' => $Program->deadline,
    'type' => $type ,
]);      
//                    
//echo $this->Form->input('deadline2', [
//    'label' => 'deadline( es_ES > Asia/Tehran ) ',
//    'locale' => 'es_ES',
//    'timezone'=>'Asia/Tehran',
//    'value' => $Program->deadline,
//    'type' => $type ,
//]);      
//
//echo $this->Form->input('deadline2', [
//    'label' => 'deadline( ar_IQ > Asia/Tehran ) ',
//    'locale' => 'ar_IQ',
//    'timezone'=>'Asia/Tehran',
//    'value' => $Program->deadline,
//    'type' => $type ,
//]);      
//                     
//echo $this->Form->input('deadline2', [
//    'label' => 'deadline( ar_IQ@calendar=islamic > Asia/Tehran ) ',
//    'locale' => 'ar_IQ@calendar=islamic',
//    'timezone'=>'Asia/Tehran',
//    'value' => $Program->deadline,
//    'type' => $type ,
//]);    
//
//
//echo  $this->Form->input('deadline63', [
//    'label' => 'deadline( ja-JP > Asia/Tokyo ) ',
//    'locale' => 'ja-JP',
//    'timezone' => 'Asia/Tokyo', 
//    'calendar' => 'japanese',
//    'type' => $type,
//    'value' => $Program->deadline
//]); 
//
//echo  $this->Form->input('deadline63', [
//    'label' => 'deadline( ja-JP@calendar=japanese > Asia/Tokyo ) ',
//    'locale' => 'ja-JP@calendar=japanese',
//    'timezone' => 'Asia/Tokyo', 
//    'type' => $type,
//    'value' => $Program->deadline
//]); 
//
//
//echo $this->Form->input('deadline633', [
//    'label' => 'deadline( iw_IL > Asia/Tokyo ) ',
//    'locale' => 'iw_IL',
//    'timezone' => 'Asia/Tokyo',  
//    'type' => $type,
//    'value' => $Program->deadline
//]); 
//
//echo $this->Form->input('deadline633', [
//    'label' => 'deadline( fa_IL > Asia/Tehran ) ',
//    'locale' => 'fa_IL',
//    'timezone' => 'Asia/Tehran',  
//    'type' => $type,
//    'value' => $Program->deadline
//]); 
//
?>
  
     
            </div>
	</div>
    <div class="body-footer ">
           		<?= $this->Html->bottunIcon('بازگشت','mdi-forward',['action' => 'index']); ?>
                <?= $this->Form->submit(__('ذخیره')) ?>	
    </div>
          
    <?= $this->Form->end() ?>
	</div>
</div>


