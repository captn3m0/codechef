---
{"category_name":"easy","problem_code":"KSPHERES","problem_name":"Spheres","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"aangairbender","problem_tester":null,"date_added":"29-07-2015","tags":{"0":"aangairbender","1":"dynamic","2":"easy","3":"oct15"},"editorial_url":"http://discuss.codechef.com/problems/KSPHERES","time":{"view_start_date":1444642200,"submit_start_date":1444642200,"visible_start_date":1444642200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/mandarin/KSPHERES.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/russian/KSPHERES.pdf">Russian</a> </h3>
<p>Eugene has a sequence of upper hemispheres and another of lower hemispheres. The first set consists of <b>N</b> upper hemispheres indexed 1 to <b>N</b> and the second has <b>M</b> lower hemispheres indexed 1 to <b>M</b>. The hemispheres in any sequence can have different radii.</p>
<p>He is now set out on building spheres using them. To build a sphere of radius <b>R</b>, he must take one upper half of the radius <b>R</b> and one lower half of the radius <b>R</b>. Also, he can put a sphere into a bigger one and create a sequence of nested concentric spheres. But he can't put two or more spheres directly into another one.</p>
<p>
</p><p>Examples: </p>
<p><img src="https://www.codechef.com/download/OCT15//ok.png" /><br />
<img src="https://www.codechef.com/download/OCT15//wrong.png" />
</p>
<p></p><p>If there is a sequence of (<b>D+1</b>) nested spheres, we can call this sequence as a <b>D</b>-sequence.</p>
<p><img src="https://www.codechef.com/download/OCT15/1-sequence.png" /><br />
<img src="https://www.codechef.com/download/OCT15//2-sequence.png" />
</p>
<p>
Eugene has to find out how many different <b>X</b>-sequence are possible (<b>1</b> &lt;= <b>X</b> &lt;= <b>C</b>). An <b>X</b> sequence is different from another if the index of any of the hemisphere used in one <b>X</b>-sequence is different from the other. Eugene doesn't know how to do it, so Chef agreed to help him. Of course, Chef is too busy now and he asks you to help him.
</p>
<h3>Input</h3>
<p>The first line contains a three integers: <b>N</b> denoting the number of upper sphere halves, <b>M</b> denoting the number of lower sphere halves and <b>C</b>.</p>
<p>The second line contains <b>N</b> space-separated integers <b>U<sub>1</sub></b>, <b>U<sub>2</sub></b>, ..., <b>U<sub>N</sub></b> denoting the radii of upper hemispheres.</p>
<p>The third line contains <b>M</b> space-separated integers <b>L<sub>1</sub></b>, <b>L<sub>2</sub></b>, ..., <b>L<sub>M</sub></b> denoting the radii of lower hemispheres.
</p>
<h3>Output</h3>
<p>Output a single line containing <b>C</b> space-separated integers <b>D<sub>1</sub></b>, <b>D<sub>2</sub></b>, ..., <b>D<sub>C</sub></b>, where <b>D<sub>i</sub></b> is the number of ways there are to build <b>i</b>-sequence in modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>C</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>U<sub>i</sub></b> ≤ <b>C</b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>C</b></li>
</ul>
</p>
<h3>Subtasks</h3>
<p><ul>
<li><b>Subtask 1:</b>  1 ≤ <b>N, M, C</b> ≤ <b>10</b> - <b>15 points</b></li>
<li><b>Subtask 2:</b> 1 ≤ <b>N, M, C</b> ≤ <b>100</b> - <b>25 points</b></li>
<li><b>Subtask 3:</b> <b>Original constraints</b> - <b>60 points</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>3 4 3
1 2 3
1 1 3 2</tt>

<b>Output:</b>
<tt>5 2 0</tt>
</pre>
<h3>Explanation</h3>
<p></p><p>We can build spheres with such radii:</p>
<p><b>R</b>=1 and there are 2 ways to do it. (We can choose any of 2 lower hemispheres with <b>R</b>=1)</p>
<p><b>R</b>=2 and there is 1 way to do it.</p>
<p><b>R</b>=3 and there is 1 way to do it.</p>

<p>We can build these <b>1</b>-sequences:</p>
<p>1->2 and there are 2 ways to do it. ( sphere with radius 1 is inside sphere with radius 2, we can choose any of 2 ways of building sphere with radius 1)</p>
<p>1->3 and there are 2 ways to do it.</p>
<p>2->3 and there is 1 way to do it.</p>
<p><b>2 + 2 + 1 = 5</b></p>

<p>We can build these <b>2</b>-sequences:</p>
<p>1->2->3 and there are 2 ways to do it.</p>

<p>We can't build <b>3</b>-sequences, because we don't have 4 spheres of different radii.</p>

