<div class="d-flex flex-wrap gap-3 justify-content-center my-6"> 
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Bold" data-option="bold">
        <i class="icon-base ti tabler-bold icon-md"></i>
    </button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Italic" data-option="italic">
		<i class="icon-base ti tabler-italic icon-md"></i>
    </button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Underline" data-option="underline">
		<i class="icon-base ti tabler-underline icon-md"></i>
    </button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Strikethrough" data-option="strikeThrough">
		<i class="icon-base ti tabler-strikethrough icon-md"></i>
    </button>

    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Sans Serif" style="font-size: 1.375rem;" data-option="sansserif">𝖳</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Cursive" style="font-size: 1.375rem;" data-option="cursive">𝒯</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Doublestruck" style="font-size: 1.375rem;" data-option="doublestruck">𝕋</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Doublestruck 2" style="font-size: 1.375rem;" data-option="doublestruckAlt">⍑</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip fw-light w-8" data-ra-title="Gothic" style="font-size: 1.375rem;" data-option="gothic">𝔗</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip fw-light w-8" data-ra-title="Circled" style="font-size: 1.375rem;" data-option="circled">Ⓣ</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip fw-light w-8" data-ra-title="Circled Negative" style="font-size: 1.375rem;" data-option="circledDark">🅣</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip fw-light w-8" data-ra-title="Squared" style="font-size: 1.375rem;" data-option="squared">🅃</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip fw-light w-8" data-ra-title="Squared Negative" style="font-size: 1.375rem;" data-option="squaredDark">🆃</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8 emoji" style="font-size: 1.375rem;">😊</button>
</div>
			
<label for="inputText" class="form-label"><?php echo e(__('Text Message')); ?></label>
<textarea id="inputText" name="message" class="form-control" cols="30" rows="15" required></textarea>
<label for="footer" class="form-label mt-2"><?php echo e(__('Footer message *optional')); ?></label>
<input type="text" name="footer" class="form-control" id="footer"><?php /**PATH E:\projects\mpwa-magd-v10.0.0\resources\themes/vuexy/views/ajax/messages/formtext.blade.php ENDPATH**/ ?>