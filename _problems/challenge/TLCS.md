---
{"category_name":"challenge","problem_code":"TLCS","problem_name":"Longest Common Subsequence","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":2.02,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin"},"time":{"view_start_date":1232506581,"submit_start_date":1232506581,"visible_start_date":1232506581,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align=justify>For a given two words <b>x</b> = <i>x<sub></i>1<i></sub>x<sub></i>2<i></sub>...x<sub>n</sub></i>
and <b>y</b> = <i>y<sub></i>1<i></sub>y<sub></i>2<i></sub>...y<sub>m</sub></i>
find the longest common subsequence, i.e. <b>z</b> = <i>z<sub></i>1<i></sub>z<sub></i>2<i></sub>...z<sub>k</sub></i>
such that every two consecutive elements of <b>z</b> are equal to some two elements of <b>x</b>: x<sub>a</sub></i>, x<sub>b</sub></i>, and <b>y</b>: y<sub>c</sub></i>, y<sub>d</sub></i> where <i>a</i> < <i>b</i> and <i>c</i> < <i>d</i>. Assume, that elements of words are letters 'a' - 'z' and <i>m</i>,<i>n</i> <= 1000.
</p>
<h3>Input</h3>
<p align=justify>
<i>t</i> [the number of test cases <= 1000]
<br><i>n</i> <b>x</b>
<br><i>m</i> <b>y</b>
<br>...
</p>
<h3>Output</h3>
<p align=justify>
case 1 Y [or N when no answer to this case]
<br><i>d</i> [the length of the lcs]
<br><i>z<sub>j</sub></i> <i>p q</i> [position of <i>z<sub>j</sub></i> in <b>x</b> and in <b>y</b>, respectively]
<br>...
</p>

<h3>Example</h3>
<pre>
<b>Input:</b>
3
5 ddacc
3 cac
7 cbbccbc
4 aaca
4 cbeb
5 fdceb

<b>Output:</b>
case 1 Y
2
a 3 2
c 4 3
case 2 N
case 3 Y
3
c 1 3
e 3 4
b 4 5

<b>Score</b>
2

</pre>

