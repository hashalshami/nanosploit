<style>
    .copyCode{
       
    }
</style>
<div class="bg-[#444654] p-5 rounded my-3 mx-4" dir="rtl">
    <div class="title-exam">
        <h3>مثال</h3>
    </div>
    <div class="rounded mt-4" dir="ltr">
        <div class="flex items-center justify-between bg-[#343541] h-8 rounded-t px-4 text-xs text-[#d9d9e3]">
            <div> html </div>
            <button class="pointer inline-flex items-center gap-x-1" onclick="copyCode(this)">
                <svg class="h-4 inline-block fill-none stroke-current stroke-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                </svg>
                <span>Copy code</span>
            </button>
        </div>
        {{-- code-exam --}}
        <div class="scroll-smooth overflow-x-auto leading-normal bg-black text-[#eeeeee] rounded-b py-3" style="counter-reset: line;" dir="ltr">
            <pre><code>&lt;<span class="tag">ul</span>&gt;</code> </pre>
            <pre class="comment ">  &lt;!--  العنصر الأول للقائمة الرئيسية --&gt;</pre>
            <pre>  <code>&lt;<span class="tag">li</span>&gt;</code> Front-End </pre>
            <pre>      <code>&lt;<span class="tag">ul</span>&gt;</code> </pre>
            <pre>          <code>&lt;<span class="tag">li</span>&gt;</code> HTML <code>&lt;/<span class="tag">li</span>&gt;</code></pre>
            <pre>          <code>&lt;<span class="tag">li</span>&gt;</code> CSS <code>&lt;/<span class="tag">li</span>&gt;</code></pre>
            <pre>          <code>&lt;<span class="tag">li</span>&gt;</code> JavaScript <code>&lt;/<span class="tag">li</span>&gt;</code></pre>
            <pre>      <code>&lt;/<span class="tag">ul</span>&gt;</code> </pre>
            <pre>  <code>&lt;/<span class="tag">li</span>&gt;</code> </pre>
            <pre>&nbsp;</pre>
            <pre class="comment">  &lt;!--  العنصر الثاني للقائمة الرئيسية --&gt;</pre>
            <pre>   <code>&lt;<span class="tag">li</span>&gt;</code> Back-End </pre>
            <pre>       <code>&lt;<span class="tag">ul</span>&gt;</code> </pre>
            <pre>           <code>&lt;<span class="tag">li</span>&gt;</code> MySQL <code>&lt;/<span class="tag">li</span>&gt;</code></pre>
            <pre>           <code>&lt;<span class="tag">li</span>&gt;</code> PHP <code>&lt;/<span class="tag">li</span>&gt;</code></pre>
            <pre>       <code>&lt;/<span class="tag">ul</span>&gt;</code> </pre>
            <pre>   <code>&lt;/<span class="tag">li</span>&gt;</code> </pre>
            <pre><code>&lt;/<span class="tag">ul</span>&gt;</code> </pre>
            <!--  -->
        </div>
    </div>
    <div class="result">
        <button onclick="result(this)">
            <span> شاهد النتيجة</span>&nbsp;
            <i class="fa fa-caret-down"></i>
            <i class="fa fa-caret-up none"></i>
        </button>
        <div class="lines6">
            <iframe src="./Exam/ulNested.html" frameborder="0" seamless="" title="Example"></iframe>
        </div>
    </div>
</div>
