---
{"category_name":"hard","problem_code":"IMPROVE","problem_name":"Improve the Permutation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"errichto","date_added":"13-01-2017","tags":{"0":"ltime44","1":"medium","2":"permutation","3":"xcwgf666"},"editorial_url":"https://discuss.codechef.com/problems/IMPROVE","time":{"view_start_date":1485622800,"submit_start_date":1485622800,"visible_start_date":1485622800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/mandarin/IMPROVE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/russian/IMPROVE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/vietnamese/IMPROVE.pdf">Vietnamese</a> as well.</h3>

<p>Sergey thinks that some permutations are better than other permutations. He thinks that the permutations with the smaller number of inversions are nicer than the ones with the bigger number of inversions. So the smaller the number of inversions is, the nicer is the permutation.</p>

<p>Sergey has a permutation <b>A</b> which he wants to make as nice as possible. This is kind of special permutation, because initially it doesn't have any index <b>i</b> such that <b>A<sub>i</sub></b> = <b>i</b> (Assume 1-based indexing). For making it nicer, he can swap two <b>adjacent</b> numbers in this permutation, but only if both of them are not on their places (i.e. if you swap <b>A<sub>i</sub></b> and <b>A<sub>i+1</sub></b>, then <b>A<sub>i</sub> ≠ i</b> and <b>A<sub>i+1</sub> ≠ i+1</b> should be held). He wants to perform such operation multiple times to make the number of inversions in the permutation as small as possible.</p>

<p>Making the permutation the nicest of the possible ones has turned out to be a complicated problem, so Sergey asks you to help him and to provide <i>any</i> sequence of the allowed swaps that would lead him to obtaining the nicest permutation. Since Sergey is quite eager to see the way to improve his permutation, he wants the sequence to be not longer than <b>2 × N<sup>2</sup></b>. It can be proved that such sequence can be found under this restriction.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>

<p>The first line of each test case contains a single integer <b>N</b> denoting the amount of numbers in the permutation. </p>

<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the permutation itself.</p>

<h3>Output</h3>
<p>For each test case, output an answer in the following format:
<ul>
<li>The first line should contain a single integer <b>C</b> denoting the number of swap operations.</li>
<li>On the following line, output <b>C</b> space-separated integers <b>D<sub>j</sub></b> denoting the swap of the <b>D<sub>j</sub></b><sup>th</sup> and the (<b>D<sub>j</sub>+1)</b><sup>th</sup> number in the permutation (1-indexed).
</ul>
</p>
<p>The restrictions for the output sequence are:
<ul>
<li><b>1</b> ≤ <b>C</b> ≤ <b>2 × N<sup>2</sup></b></li>
<li><b>1</b> ≤ <b>D<sub>j</sub></b> < <b>N</b></li>
</ul>
</p>

<h3>Constraints</h3>
<ul>
<li><b>A</b> is a permutation.</li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>A<sub>i</sub></b> ≠ <b>i</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (23 points)</b>: <b>1</b> ≤ <b>T</b> ≤ <b>10</b>, <b>1</b> ≤ <b>N</b> ≤ <b>5</b></li>
<li><b>Subtask #2 (77 points)</b>: <b>1</b> ≤ <b>T</b> ≤ <b>50</b>, <b>1</b> ≤ <b>N</b> ≤ <b>50</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
4
4 3 2 1</tt>

<b>Output:</b>
<tt>6
1 3 2 3 1 2</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Let's perform these operations one-by-one. The positions having <b>A<sub>i</sub> = i</b> will be highlighted in bold:
<ul>
<li>Initially we have A = (4, 3, 2, 1)</li>
<li>Then we swap <b>A<sub>1</sub></b> with <b>A<sub>2</sub></b>, obtaining A = (3, 4, 2, 1)</li>
<li>Then we swap <b>A<sub>3</sub></b> with <b>A<sub>4</sub></b>, obtaining A = (3, 4, 1, 2)</li>
<li>Then we swap <b>A<sub>2</sub></b> with <b>A<sub>3</sub></b>, obtaining A = (3, 1, 4, 2)</li>
<li>Then we swap <b>A<sub>3</sub></b> with <b>A<sub>4</sub></b>, obtaining A = (3, 1, 2, <b>4</b>)</li>
<li>Then we swap <b>A<sub>1</sub></b> with <b>A<sub>2</sub></b>, obtaining A = (<b>1</b>, 3, 2, <b>4</b>)</li>
<li>Finally we swap <b>A<sub>2</sub></b> with <b>A<sub>3</sub></b>, obtaining A = (<b>1</b>, <b>2</b>, <b>3</b>, <b>4</b>)</li>
</ul>
</p>
<p>
This way we've obtained the permutation with zero inversions. Obviously, this is the nicest possible permutation in this test case.
</p>