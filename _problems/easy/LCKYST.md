---
{"category_name":"easy","problem_code":"LCKYST","problem_name":"Na2a and lucky stone","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"na2a","problem_tester":"mugurelionut","date_added":"8-04-2015","tags":{"0":"july15","1":"maths","2":"na2a","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/LCKYST","time":{"view_start_date":1436779800,"submit_start_date":1436779800,"visible_start_date":1436779800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/JULY15/mandarin/LCKYST.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/JULY15/russian/LCKYST.pdf" target="_blank">Russian</a>.</h3>
<p>A number is called as a lucky number if its decimal representation contains only the lucky digits, 4 and 7. e.g. 47, 744, 4 are lucky numbers, whereas 5, 17, 467 are not.</p>
<p>Recently, Na2a found a magic stone. With the help of this stone, he can multiply a number by any lucky number. Also, the magic stone can be used any number of times (possibly zero or infinite number of times).<br /> For example, if initially he has the number 1, then he can get numbers like 28 (formed by 1*4*7), 14476 (formed as 1*47*77*4) etc.</p>
<p>Na2a has <b>N</b> numbers in his bag which are denoted by array <b>A</b>. For each number <b>A</b><sub>i</sub> in his bag, he asks you to transform it to a number with maximum possible number of trailing zeroes by using Magic Stone. You have to find the smallest of such numbers, since there can be multiple numbers with the maximum possible number of trailing zeros.</p>
<h3>Input</h3>
<ul>
<li>There is a single test case.</li>
<li>First line contains a single integer <b>N</b> as stated in the problem.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A</b><sub>1</sub>, <b>A</b><sub>2</sub>, ... , <b>A</b><sub><b>N</b></sub> where <b>A</b><sub>i</sub> denotes the <b>i</b><sup>th</sup> number in the bag.</li>
</ul>
<h3>Output</h3>
<ul>
<li>Output <b>N</b> lines, in which <b>i</b><sup>th</sup> line contains the answer corresponding to the number <b>A</b><sub>i</sub>.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A</b><sub>i</sub> ≤ 10<sup>9</sup> </li>
</ul>
<h3>Subtasks</h3>
<p><b> Subtask 1(8 points) </b></p>
<ul>
<li>1 ≤ <b>N</b> ≤ 10</li>
<li>1 ≤ <b>A</b><sub>i</sub> ≤ 10 </li>
</ul>
<p><br /> <b> Subtask 2(22 points) </b></p>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>2</sup></li>
<li>1 ≤ <b>A</b><sub>i</sub> ≤ 10<sup>3</sup> </li>
</ul>
<p><br /> <b> Subtask 3(70 points) </b></p>
<ul>
<li>Original constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 15

<b>Output:</b>
2
60
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> You can't get any number having zeros at the end multiplying 2 by lucky numbers.</p>
<p><b>Example case 2.</b> You can multiply 15 by 4 and get 60, which has one trailing zero.</p>