@props(['body', 'header', 'show'])

<div class="flex flex-col" @isset($show) x-data="{showRows: {{ $show }}, showingAll: false}" @endisset>
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden rounded shadow-sm border border-gray-200 mb-3">
        <table class="min-w-full divide-y divide-gray-200">
          @isset($header)
            <thead>
              <tr>
                {{ $header }}
              </tr>
            </thead>
          @endisset
          @isset($body)
            <tbody class="divide-y divide-gray-100">
              {{ $body }}
            </tbody>
          @endisset
        </table>
      </div>
      @isset($show)
        <div class="mt-5 flex justify-end">
          <button class="btn btn-secondary" x-show="!showingAll" x-cloak @click="showingAll = !showingAll">Show all</button>
          <button class="btn btn-secondary" x-show="showingAll" x-cloak @click="showingAll = !showingAll">Show {{ $show }} rows</button>
        </div>
      @endisset
    </div>
  </div>
</div>
