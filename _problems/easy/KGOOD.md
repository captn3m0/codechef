---
{"category_name":"easy","problem_code":"KGOOD","problem_name":"K-good Words","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"kevinsogo,xcwgf666,antoniuk1","date_added":"25-05-2016","tags":{"0":"easy","1":"greedy","2":"kevinsogo","3":"snckql16","4":"strings"},"editorial_url":"http://discuss.codechef.com/problems/KGOOD","time":{"view_start_date":1464708600,"submit_start_date":1464708600,"visible_start_date":1464708600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/mandarin/KGOOD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/russian/KGOOD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/vietnamese/KGOOD.pdf">Vietnamese</a> as well.</h3>
<p>Chef Al Gorithm was reading a book about climate and oceans when he encountered the word “<b>glaciological</b>”. He thought it was quite curious, because it has the following interesting property: For every two letters in the word, if the first appears <b>x</b> times and the second appears <b>y</b> times, then <b>|x - y| ≤ 1</b>.</p>
<p>Chef Al was happy about this and called such words <b>1-good</b> words. He also generalized the concept: He said a word was <b>K-good</b> if <i>for every two letters in the word, if the first appears <b>x</b> times and the second appears <b>y</b> times, then <b>|x - y| ≤ K</b></i>.</p>
<p>Now, the Chef likes <b>K</b>-good words a lot and so was wondering: Given some word <b>w</b>, how many letters does he have to remove to make it <b>K</b>-good?</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of a single line containing two things: a word <b>w</b> and an integer <b>K</b>, separated by a space.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a single integer: the minimum number of letters he has to remove to make the word <b>K</b>-good.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>30</b></li>
<li><b>1</b> ≤ <b>|w|</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>w</b> contains only lowercase English letters.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
glaciological 1
teammate 0
possessions 3
defenselessness 3

<b>Output:</b>
0
0
1
2
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The word “<b>glaciological</b>” is already 1-good, so the Chef doesn't have to remove any letter.</p>
<p><b>Example case 2.</b> Similarly, “<b>teammate</b>” is already 0-good.</p>
<p><b>Example case 3.</b> The word “<b>possessions</b>” is 4-good. To make it 3-good, the Chef can remove the last <b>s</b> to make “<b>possession</b>”.</p>
<p><b>Example case 4.</b> The word “<b>defenselessness</b>” is 4-good. To make it 3-good, Chef Al can remove an <b>s</b> and an <b>e</b> to make, for example, “<b>defenslesness</b>”. Note that the word doesn't have to be a valid English word.</p>
