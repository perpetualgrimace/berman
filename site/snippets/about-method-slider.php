   <div class="method-slider-container">

      <section class="g-columns slider fixed-height no-top-padding">

         <? if (($page->Slide5() != "") && ($page->Slide6() == "")): ?>

         <ul class="slider-method-pager slider-method-pager-5 js-slider-method-pager">
            <li><button type="button" class="js-method-pager-4"><span>4</span></button></li>
            <li><button type="button" class="js-method-pager-5"><span>5</span></button></li>
            <li><button type="button" class="js-method-pager-1"><span>1</span></button></li>
            <li><button type="button" class="js-method-pager-2"><span>2</span></button></li>
            <li><button type="button" class="js-method-pager-3"><span>3</span></button></li>
         </ul>

         <? elseif (($page->Slide6() != "") && ($page->Slide7() == "")): ?>

         <ul class="slider-method-pager slider-method-pager-6 js-slider-method-pager">
            <li><button type="button" class="js-method-pager-5"><span>5</span></button></li>
            <li><button type="button" class="js-method-pager-6"><span>6</span></button></li>
            <li><button type="button" class="js-method-pager-1"><span>1</span></button></li>
            <li><button type="button" class="js-method-pager-2"><span>2</span></button></li>
            <li><button type="button" class="js-method-pager-3"><span>3</span></button></li>
            <li><button type="button" class="js-method-pager-4"><span>4</span></button></li>
         </ul>

         <? elseif (($page->Slide7() != "")): ?>

         <ul class="slider-method-pager slider-method-pager-7 js-slider-method-pager">
            <li><button type="button" class="js-method-pager-6"><span>6</span></button></li>
            <li><button type="button" class="js-method-pager-7"><span>7</span></button></li>
            <li><button type="button" class="js-method-pager-1"><span>1</span></button></li>
            <li><button type="button" class="js-method-pager-2"><span>2</span></button></li>
            <li><button type="button" class="js-method-pager-3"><span>3</span></button></li>
            <li><button type="button" class="js-method-pager-4"><span>4</span></button></li>
            <li><button type="button" class="js-method-pager-5"><span>5</span></button></li>
         </ul>

         <? else: ?>

         <ul class="slider-method-pager slider-method-pager-4 js-slider-method-pager">
            <li><button type="button" class="js-method-pager-2"><span>2</span></button></li>
            <li><button type="button" class="js-method-pager-3"><span>3</span></button></li>
            <li><button type="button" class="js-method-pager-4"><span>4</span></button></li>
            <li><button type="button" class="js-method-pager-1"><span>1</span></button></li>
         </ul>

         <? endif ?>

         <ul class="slider-method js-slider-method pattern back">

            <li class="no-padding">
               <div class="g-columns">
                  <div class="limited-width vertical-center"><?= kirbytext($page->Slide1()) ?></div>
               </div>
            </li>

            <li class="no-padding">
               <div class="g-columns">
                  <div class="limited-width vertical-center"><?= kirbytext($page->Slide2()) ?></div>
               </div>
            </li>

            <li class="no-padding">
               <div class="g-columns">
                  <div class="limited-width vertical-center"><?= kirbytext($page->Slide3()) ?></div>
               </div>
            </li>

            <? if ($page->Slide4() != ""): ?>

            <li class="no-padding">
               <div class="g-columns">
                  <div class="limited-width vertical-center"><?= kirbytext($page->Slide4()) ?></div>
               </div>
            </li>

            <? endif ?>
            <? if ($page->Slide5() != ""): ?>

            <li class="no-padding">
               <div class="g-columns">
                  <div class="limited-width vertical-center"><?= kirbytext($page->Slide5()) ?></div>
               </div>
            </li>

            <? endif ?>
            <? if ($page->Slide6() != ""): ?>

            <li class="no-padding">
               <div class="g-columns">
                  <div class="limited-width vertical-center"><?= kirbytext($page->Slide6()) ?></div>
               </div>
            </li>

            <? endif ?>
            <? if ($page->Slide7() != ""): ?>

            <li class="no-padding">
               <div class="g-columns">
                  <div class="limited-width vertical-center"><?= kirbytext($page->Slide7()) ?></div>
               </div>
            </li>

            <? endif ?>


         </ul>

      </section>

   </div>
