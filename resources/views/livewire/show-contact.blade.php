<section id="contact" class="bg-[linear-gradient(90deg,#F5A476,#FFF385)] py-16 px-4">
  <div class="max-w-5xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-800">Contact</h2>
    <p class="text-gray-600 mt-2">N'hésitez pas à nous contacter</p>

    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
      
      @foreach ($items as $item)        
      <div class="bg-white rounded-2xl shadow p-6">
        <div class="flex gap-3">
            <div class="text-indigo-600 mb-3">
                @if (strpos(strtolower($item->name),"téléphone")!==false)
                <svg width="16px" height="16px" viewBox="-0.54 0 31.251 31.251" xmlns="http://www.w3.org/2000/svg">
                    <g id="phone" transform="translate(-1201.175 -255.404)">
                        <path id="Path_41" data-name="Path 41" d="M1208.194,256.541c.291.03.565.049.836.089a1.122,1.122,0,0,1,1.005.727c.288.839.569,1.681.832,2.528.37,1.188.685,2.395,1.094,3.569a1.874,1.874,0,0,1-.459,2.007c-.562.623-1.174,1.2-1.78,1.783a1.129,1.129,0,0,0-.292,1.475,19.935,19.935,0,0,0,6.762,8.144c.775.524,1.591.991,2.412,1.443a1.052,1.052,0,0,0,1.48-.245q1.223-1.211,2.435-2.431a1.133,1.133,0,0,1,1.646-.254c1.875,1.112,3.728,2.264,5.6,3.387a1,1,0,0,1,.523,1.186,20.241,20.241,0,0,1-.793,2.633,4.161,4.161,0,0,1-2.05,1.919,7.508,7.508,0,0,1-6.616.659c-1.53-.607-3.023-1.312-4.512-2.018a23.42,23.42,0,0,1-8.416-7.078,36.6,36.6,0,0,1-4.738-7.922,9.865,9.865,0,0,1-.523-7.235,7.911,7.911,0,0,1,3.227-4.125A2.809,2.809,0,0,1,1208.194,256.541Z" fill="#ffc2c2" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </g>
                </svg>
                @endif
                @if ((strpos(strtolower($item->name),"email")!==false) || (strpos(strtolower($item->name),"courriel")!==false))
                <svg fill="#000000" width="16px" height="16px" viewBox="0 -5 24 24" id="email" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
                    <path id="secondary" d="M20.61,5.23l-8,6.28a1,1,0,0,1-1.24,0l-8-6.28A1,1,0,0,0,3,6V18a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1V6A1,1,0,0,0,20.61,5.23Z" style="fill: rgb(44, 169, 188); stroke-width: 2;"></path><path id="primary" d="M20,19H4a1,1,0,0,1-1-1V6A1,1,0,0,1,4,5H20a1,1,0,0,1,1,1V18A1,1,0,0,1,20,19ZM20,5H4a1,1,0,0,0-.62.22l8,6.29a1,1,0,0,0,1.24,0l8-6.29A1,1,0,0,0,20,5Z" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                    </path>
                </svg>
                @endif
                @if (strpos(strtolower($item->name),"adresse")!==false)
                <svg width="32px" height="32px" viewBox="0 -398 1820 1820" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M521.481481 860.254815h245.191112L803.081481 709.783704l-201.481481 24.272592zM1045.807407 624.82963l104.296297-12.136297-31.478519-53.475555h-92.254815zM1179.306667 666.074074L924.444444 695.182222l4.835556 165.072593h368.924444z" fill="#5FFFBA" /><path d="M1023.905185 229.167407C977.825185 182.992593 921.979259 161.185185 858.832593 161.185185s-118.897778 21.807407-165.072593 67.982222c-46.08 46.08-67.982222 99.555556-67.982222 162.607408 0 58.216296 26.737778 114.062222 77.653333 172.373333l2.465185 2.465185 70.352593 84.954074c12.136296 19.437037 24.272593 36.408889 33.943704 55.845926 19.437037 38.874074 36.408889 89.78963 51.01037 155.306667 14.601481-65.517037 31.573333-116.527407 51.01037-155.306667 19.437037-38.874074 48.545185-80.118519 87.41926-123.828148l14.601481-19.437037c51.01037-58.216296 77.653333-114.062222 77.653333-172.373333 0-63.146667-21.807407-118.897778-67.982222-162.607408zM856.462222 510.672593c-67.982222 0-123.828148-55.845926-123.828148-123.828149s55.845926-123.828148 123.828148-123.828148 123.828148 55.845926 123.828148 123.828148S924.444444 510.672593 856.462222 510.672593z" fill="#FFA28D" />
                    <path d="M642.844444 666.074074l133.49926-14.601481-70.352593-84.954074z" fill="#5FFFBA" />
                </svg>
                @endif
            </div>
            <h3 class="font-semibold text-gray-800">{{$item->name}}</h3>
        </div>
        <p class="text-gray-600 mt-1">
          <a class="hover:underline">{{$item->value}}</a>
        </p>
      </div>
      @endforeach
    </div>
  </div>
</section>