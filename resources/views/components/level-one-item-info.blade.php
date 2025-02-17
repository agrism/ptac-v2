@php
    $data = $data ?? null;
    $dataLabel= $dataLabel ?? null;
    $className= $className ?? null;
    $apiUrl= $apiUrl ?? null;
    $viewFile= $viewFile ?? null;
    $elkData= $elkData ?? null;
    $elkDataLabel= $elkDataLabel ?? null;
    $id = uniqid();
@endphp



<div>

    <div class="rounded-full w-5 h-5 flex items-center justify-center border border-red-500 mt-1 bg-red-500 hover:bg-white text-white hover:text-red-500 cursor-pointer"
         onclick="const details = document.getElementById('details_<?= $data->id ?? $id ?>'); details.style.display = details.style.display === 'none' ? 'block' : 'none';"
    >
        <span class="fa fa-info text-xs"></span>
    </div>
<div id="details_<?= $data?->id ?? $id ?>" style="display: none;">
    <style>
        /* Basic styling for the JSON display */
        pre {
            background-color: lightblue;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-family: monospace;
        }

        code {
            font-size: 16px;
        }

        pre.elkData {
            background-color: lightgreen;
        }

        pre.apiUrl {
            background-color: #eeeaea;
            color: #858484;
        }
    </style>

    <?php if($data) {?>
    <pre><b><?=$dataLabel ?: 'Taken data from ELK' ?>:</b> <code class="text-sm"><?= json_encode($data,JSON_PRETTY_PRINT) ?></code></pre>
    <?php } ?>
    <?php if($elkData) {?>
    <pre class="elkData"><b><?=$elkDataLabel ?: 'ELK provided data' ?>:</b> <code  class="text-sm"><?= json_encode($elkData, JSON_PRETTY_PRINT) ?></code></pre>
    <?php } ?>
    <?php if($className || $apiUrl || $viewFile){ ?>
    <pre class="apiUrl"><b>Class url:</b> <code  class="text-sm"><?= json_encode(array_filter([
                'apiUrl' => $apiUrl,
                'className' => $className,
                'viewFile' => $viewFile,
            ]),JSON_PRETTY_PRINT) ?></code></pre>
    <?php } ?>
</div>
</div>
