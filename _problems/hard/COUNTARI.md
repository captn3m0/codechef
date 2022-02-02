---
{"category_name":"hard","problem_code":"COUNTARI","problem_name":"Arithmetic Progressions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP14","11":"CS2","12":"D","13":"ERL","14":"FORT","15":"FS","16":"GO","17":"HASK","18":"ICK","19":"ICON","20":"JAVA","21":"JS","22":"LISP clisp","23":"LISP sbcl","24":"LUA","25":"NEM","26":"NICE","27":"NODEJS","28":"PAS fpc","29":"PAS gpc","30":"PERL"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"laycurse","date_added":"25-10-2012","tags":{"0":"fft","1":"hard","2":"maths","3":"nov12","4":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/COUNTARI","time":{"view_start_date":1352712600,"submit_start_date":1352712600,"visible_start_date":1352712600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Given <b>N</b> integers <b>A<sub>1</sub>, A<sub>2</sub>, …. A<sub>N</sub></b>, Dexter wants to know how many ways he can choose three numbers such that they are  three consecutive terms of an arithmetic progression.
</p>
<p>
Meaning that, how many triplets <b>(i, j, k)</b> are there such that  <b>1  ≤ i &lt; j &lt; k ≤ N</b> and <b>A<sub>j</sub> - A<sub>i</sub> = A<sub>k</sub> - A<sub>j</sub></b>.
</p>
<p>
So the triplets (2, 5, 8), (10, 8, 6), (3, 3, 3) are valid as they are three consecutive terms of an arithmetic<br />
progression. But the triplets (2, 5, 7), (10, 6, 8) are not.
</p>
<h3>Input</h3>
<p>
First line of the input contains an integer <b>N (3 ≤ N ≤ 100000)</b>. Then the following line contains <b>N</b> space separated integers <b>A<sub>1</sub>, A<sub>2</sub>, …, A<sub>N</sub></b> and they have values between <b>1</b> and <b>30000</b> (inclusive).
</p>
<h3>Output</h3>
<p>
Output the number of ways to choose a triplet such that they are three consecutive terms of an arithmetic progression.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
10
3 5 3 6 3 4 10 4 5 2

<b>Output:</b>
9

</pre><h3>Explanation</h3>
<p>The followings are all 9 ways to choose a triplet
</p>
<pre>
1 : <b>(i, j, k)</b> = (1, 3, 5), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 3, 3)
2 : <b>(i, j, k)</b> = (1, 6, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
3 : <b>(i, j, k)</b> = (1, 8, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
4 : <b>(i, j, k)</b> = (3, 6, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
5 : <b>(i, j, k)</b> = (3, 8, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
6 : <b>(i, j, k)</b> = (4, 6, 10), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (6, 4, 2)
7 : <b>(i, j, k)</b> = (4, 8, 10), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (6, 4, 2)
8 : <b>(i, j, k)</b> = (5, 6, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
9 : <b>(i, j, k)</b> = (5, 8, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
</pre>