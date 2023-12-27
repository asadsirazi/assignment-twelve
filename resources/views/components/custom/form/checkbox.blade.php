<div class="checkbox-container flex">
    <label class="w-12 h-6 relative">
        <input type="checkbox" name="{{ $name }}"
               class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
               id="{{ $id }}"/>
        <span for="{{ $id }}"
              class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
    </label>
    <label for="{{ $id }}" class="ml-[10px]">{{ $label }}</label>
</div>
