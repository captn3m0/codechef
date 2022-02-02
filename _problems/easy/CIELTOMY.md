---
{"category_name":"easy","problem_code":"CIELTOMY","problem_name":"Ciel and Tomya","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":null,"date_added":"4-07-2012","tags":{"0":"backtracking","1":"cook24","2":"laycurse","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CIELTOMY","time":{"view_start_date":1342982953,"submit_start_date":1342982953,"visible_start_date":1342982428,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Tomya is a girl. She loves Chef Ciel very much.
</p>

<p>
Today, too, Tomya is going to Ciel's restaurant.
Of course, Tomya would like to go to Ciel's restaurant as soon as possible.
Therefore Tomya uses one of the shortest paths from Tomya's house to Ciel's restaurant.
On the other hand, Tomya is boring now to use the same path many times.
So Tomya wants to know the number of shortest paths from Tomya's house to Ciel's restaurant.
Your task is to calculate the number under the following assumptions.
</p>

<p>
This town has <b>N</b> intersections and <b>M</b> two way roads.
The <b>i</b>-th road connects from the <b>A<sub>i</sub></b>-th intersection to the <b>B<sub>i</sub></b>-th intersection, and its length is 

<b>C<sub>i</sub></b>.
Tomya's house is in the 1st intersection, and Ciel's restaurant is in the <b>N</b>-th intersection.
</p>


<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.
Then <strong>T</strong> test cases follow.
The first line of each test case contains 2 integers <b>N</b>, <b>M</b>.
Then next <b>M</b> lines contains 3 integers denoting <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> and <b>C<sub>i</sub></b>.
</p>

<h3>Output</h3>
<p>
For each test case, print the number of shortest paths from Tomya's house to Ciel's restaurant.
</p>

<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 10<br />
2 ≤ <b>N</b> ≤ 10<br />
1 ≤ <b>M</b> ≤ <b>N ∙ (N – 1) / 2</b><br />
1 ≤ <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> ≤ <b>N</b><br />
1 ≤ <b>C<sub>i</sub></b> ≤ 10<br />
<b>A<sub>i</sub></b> ≠ <b>B<sub>i</sub></b><br />
If <b>i</b> ≠ <b>j</b> and <b>A<sub>i</sub></b> = <b>A<sub>j</sub></b>, then <b>B<sub>i</sub></b> ≠ <b>B<sub>j</sub></b><br />
There is at least one path from Tomya's house to Ciel's restaurant.<br />
</p>

<h3>Sample Input</h3>
<pre>2
3 3
1 2 3
2 3 6
1 3 7
3 3
1 2 3
2 3 6
1 3 9</pre>

<h3>Sample Output</h3>
<pre>1
2</pre>

<h3>Explanations</h3>

<p>
In the first sample, only one shortest path exists, which is 1-3.
</p>
<p>
In the second sample, both paths 1-2-3 and 1-3 are the shortest paths.
</p>