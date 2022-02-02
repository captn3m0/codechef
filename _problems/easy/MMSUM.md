---
{"category_name":"easy","problem_code":"MMSUM","problem_name":"Better Maximal Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"kevinsogo,xcwgf666,antoniuk1","date_added":"25-05-2016","tags":{"0":"maxsum","1":"medium","2":"snckql16","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/MMSUM","time":{"view_start_date":1464708600,"submit_start_date":1464708600,"visible_start_date":1464708600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/mandarin/MMSUM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/russian/MMSUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/vietnamese/MMSUM.pdf">Vietnamese</a> as well.</h3>
<p>You're given an array of <b>N</b> integer numbers. </p>
<p>The <b>maximal sum</b> of the array is the maximal sum of the elements of a <b>nonempty</b> consecutive subarray of this array. For example, the maximal sum of the array  <b>[1, -2, 3, -2, 5]</b> is <b>6</b> because the sum of the subarray <b>[3, -2, 5]</b> is <b>6</b> and it is impossible to achieve greater subarray sum.</p>
<p>Now you're allowed to remove <b>no more than one</b> element from the given array. What is the maximal possible maximal sum of the resulting array you can achieve by doing so?</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of elements in the given array.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the elements of the array. </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the maximal possible maximal sum of the array obtained by removing no more than one integer from the initial array.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
5
1 -2 3 -2 5
2
-1 -2</tt>

<b>Output:</b>
<tt>8
-1</tt>
</pre><h3>Explanation</h3>
</p><p><b>Example case 1.</b> As shown in the statement, the maximal sum of the initial array is <b>6</b>, but if you remove the fourth element (i.e. <b>-2</b>), then the array <b>[1, -2, 3, 5]</b> will have subarray <b>[3, 5]</b> and the value of the maximal sum will be equal to <b>8</b>.</p>
