---
{"category_name":"medium","problem_code":"FUNAGP","problem_name":"Fun with AGp","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"xcwgf666","date_added":"8-03-2014","tags":{"0":"bit","1":"devuy11","2":"hard","3":"may14","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/FUNAGP","time":{"view_start_date":1399887000,"submit_start_date":1399887000,"visible_start_date":1399887000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/FUNAGP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/FUNAGP.pdf">Russian</a>.</h3>
<p>You are given an 1-based array <b>A</b> and its fixed parameters: <b>R</b>, <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b>. You need to mantain this array, performing some operations. The operations are as follows:</p>
<p><li>
0 <b>S D X Y</b><br /><br />
Add an <a href="https://en.wikipedia.org/wiki/Arithmetico-geometric_sequence">AGP</a> with the start term of <b>S</b>, the common difference of <b>D</b>, common ratio of <b>R</b> from the <b>X</b>-th to the to <b>Y</b>-th element of <b>A</b>.<br /><br />
In other words: add <b>S</b> , <b>(S+D)*R</b> , <b>(S+2D)*R<sup>2</sup></b> ,....., <b>(S+(Y-X)*D)*R<sup>Y-X</sup></b> respectively to <b>A[X]</b>, <b>A[X+1]</b>, ..., <b>A[Y]</b>.<br /><br />
</li>
<li>
1 <b>X g</b><br /><br />
Replace the value of <b>A[X]</b> to <b>(A[X])<sup>g</sup></b> modulo <b>p<sub>2</sub></b>.<br /><br />
In other words: <b>A[x]</b> = <b>(A[X])<sup>g</sup></b> modulo <b>p<sub>2</sub></b>.<br /><br />
</li>
<li>
2 <b>X Y</b><br /><br />
Report the sum of elements in <b>A</b> from the <b>X</b>-th to the <b>Y</b>-th modulo <b>p<sub>1</sub></b>.<br /><br />
In other words: output  (<b>A[X]</b> + ...... + <b>A[Y]</b>) modulo <b>p<sub>1</sub></b>.<br /><br />
</li>
<h3>Input</h3>
</p><p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of each test case contains <b>5</b> single space separated integers: <b>N</b>, <b>Q</b>, <b>R</b>, <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b>).<br /><br />
The next line contains <b>N</b> single space separated integers (each is between <b>0</b> and <b>100000</b> inclusive).<br /><br />
Then, there are <b>Q</b> lines denoting the queries in the format, described above.<br /></p>
<h3>Output</h3>
<p>For each query of the type 2 output the sum of all elements of <b>A</b> from the <b>X</b>-th to the <b>Y</b>-th modulo <b>p<sub>1</sub></b>.<br /></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ Sum of <b>N</b> over all testcases ≤ 10<sup>5</sup> </li>
<li>1 ≤ Sum of <b>Q</b> over all testcases ≤ 10<sup>5</sup> </li>
<li>1 ≤ <b>N</b>, <b>Q</b>, <b>S</b>, <b>D</b> ≤ 10<sup>5</sup></li>
<li> <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b> are primes </li>
<li> 2 ≤ <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b> ≤ 10<sup>8</sup></li>
<li> 1 ≤ <b>R</b> ≤ 10<sup>9</sup></li>
<li> 1 ≤ <b>g</b> ≤ 10<sup>3</sup></li>
</ul>
<p><br /></p>
<h3>Example</h3>
<p><b>Input</b><br /><br />
2<br /><br />
5 3 2 7 11<br /><br />
0 0 0 0 0<br /><br />
0 2 3 1 3<br /><br />
1 2 2<br /><br />
2 1 5<br /><br />
5 3 3 11 7<br /><br />
1 2 3 4 5<br /><br />
0 2 3 1 3<br /><br />
1 2 2<br /><br />
2 1 5<br /><br />
<br /><br />
<b>Output</b><br /><br />
0<br /><br />
1<br /><br />
<br /><br />
<b>Explanation</b><br /><br /></p>
<li>
<strong>The first test case</strong><br /><br /><br />
Initially <b>A</b> = [0,0,0,0,0] <br /><br />
After the first query : <b>A</b> = [2,10,32,0,0]<br /><br />
After the second query : <b>A</b> = [2,1,32,0,0] as (10 * 10) modulo 11 = 1<br /><br />
So in the third query :  2 + 1 + 32 + 0 + 0 = 35 , so 35 modulo 7 = 0<br /><br />
<br />
</li>
<li>
<strong>The second test case</strong><br /><br /><br />
Initially <b>A</b> = [1,2,3,4,5] <br /><br />
After the first query : <b>A</b> = [3,17,75,4,5]<br /><br />
After the second query : <b>A</b> = [3,2,75,4,5] as (17*17) modulo 7 = 2<br /><br />
So in the third query :  3 + 2 + 75 + 4 + 5 = 89 , so 89 modulo 11 = 1<br />
</li>
