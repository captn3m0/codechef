---
{"category_name":"medium","problem_code":"CHPLNTS","problem_name":"Chef And Plants","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abbas","problem_tester":null,"date_added":"6-09-2015","tags":{"0":"abbas"},"time":{"view_start_date":1441555600,"submit_start_date":1441555600,"visible_start_date":1420050600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef is the richest person in his town Chefinia. Chef has a big garden along with greenhouse. <br/><br />
Garden has N plants, each with a height h<sub>i</sub> (0 ≤ i ≤ N-1). <br/></br/></br/></p>
<p>Now chef wants to trim some of the plants to make all the plants of the same height.<br />
In one move, chef can select a range L,R (0 ≤ L ≤ R ≤ N-1) and reduce the height of all plants in the range by 1. <br/><br />
<br/><br />
Chef is feeling lazy and wants to know what is the minimum number of moves needed for chef to make all plants of equal length. Please help him find the answer.
</br/></br/></p>
<p> </p>
<h3>Input</h3>
<li>First line consists of integer <b>T</b>, the no. of test cases. <b>T</b> test cases follow.</li>
<li>Each test case consists of 2 line. First line contains integer <b>N</b>, the no. of plants.</li>
<li>The next line contains <b>N</b> space separated integers, representing height h<sub>i</sub> of each plant.</li>
<h3>Output</h3>
<p>
For each test case, output a single integer – the minimum no. of moves required.
</p>
<h3>Constraints</h3>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>h<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 3
5
12 18 21 10 9

<b>Output:</b>
2
12
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br />
In first case, we can first choose (2,2) and then (1,2)<br />
<br/><br />
1 2 3 -> 1 2 2 -> 1 1 1
</br/></p>
