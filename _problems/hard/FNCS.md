---
{"category_name":"hard","problem_code":"FNCS","problem_name":"Chef and Churu","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":null,"date_added":"6-10-2014","tags":{"0":"data","1":"devuy11","2":"fenwick","3":"medium","4":"nov14","5":"segment","6":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/FNCS","time":{"view_start_date":1416216600,"submit_start_date":1416216600,"visible_start_date":1416216600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/FNCS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/FNCS.pdf">Russian</a>.</h3>


<p>Chef has recently learnt Function and Addition. He is too exited to teach this to his friend Churu. Chef and Churu are very fast friends, they share their knowledge whenever they meet. Chef use to give a lot of exercises after he teaches some concept to Churu. </p>

</p>Chef has an array of <b>N</b> numbers. He also has <b>N</b> functions. Each function will return the sum of all numbers in the array from <b>L<sub>i</sub></b> to <b>R<sub>i</sub></b>.  So Chef asks churu a lot of queries which are of two types.</p>
<li>
 Type 1:  Change the <b>x<sup>th</sup></b> element of the array to <b>y</b>. <br>
</li>

<li>
Type 2:  Return the sum of all functions from <b>m</b> to <b>n</b>.<br>
</li>
<br>

Now Churu has started to solve, but Chef realize that it is tough for him to decide whether Churu is correct or not. So he needs your help , will you help him out ?

<h3>Input Format</h3>
First Line is the size of the array i.e. <b>N</b> <br>
Next Line contains <b>N</b> space separated numbers <b>A<sub>i</sub></b> denoting the array<br>
Next N line follows denoting <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b> for each functions.<br>
Next Line contains an integer <b>Q</b> , number of queries to follow.<br>
Next <b>Q</b> line follows , each line containing a query of Type 1 or Type 2.<br>
1 <b>x y</b> : denotes a type 1 query,where <b>x</b> and <b>y</b> are integers<br>
2 <b>m n</b> : denotes a type 2 query where <b>m</b> and <b>n</b> are integers<br>

<h3>Output Format</h3>
For each query of type 2 , output as asked above.<br>

<h3>Constraints</h3>
1 ≤ N ≤ 10<sup>5</sup><br>
1 ≤ A<sub>i</sub> ≤ 10<sup>9</sup><br>
1 ≤ L<sub>i</sub> ≤ N<br>
L<sub>i</sub> ≤ R<sub>i</sub> ≤ N<br>
1 ≤ Q ≤ 10<sup>5</sup><br>
1 ≤ x ≤  N<br>
1 ≤ y ≤ 10<sup>9</sup><br>
1 ≤ m ≤ N<br>
m ≤ n ≤ N<br>

<h3>Subtask</h3>
<ul>
<li>Subtask 1: N ≤ 1000 , Q ≤ 1000 , 10 points</li>
<li>Subtask 2: R-L ≤ 10 , all x will be distinct ,10 points</li>
<li>Subtask 3: Refer to constraints above , 80 points</li>
</ul>

<h3>Sample Input</h3>
5<br>
1 2 3 4 5<br>
1 3<br>
2 5<br>
4 5<br>
3 5<br>
1 2<br>
4<br>
2 1 4<br>
1 3 7<br>
2 1 4<br>
2 3 5<br>

<h3>Sample Output</h3>
41<br>
53<br>
28<br>
<h3>Explanation</h3>
Functions values initially :  <br>
F[1] = 1+ 2 + 3 = 6<br>
F[2] = 2 + 3 + 4 + 5 = 14<br>
F[3] = 4+5 = 9<br>
F[4] = 3+4+5 = 12<br>
F[5] = 1+2 = 3<br>
Query 1: F[1] + F[2] + F[3] + F[4] = 41<br>
After Update , the Functions are :<br>
F[1] = 10 , F[2] = 18 , F[3] = 9 , F[4] = 16 , F[5] = 3<br>
Query 3: F[1] + F[2] + F[3] + F[4] = 53<br>
Query 4: F[3]+F[4]+F[5] = 28<br>