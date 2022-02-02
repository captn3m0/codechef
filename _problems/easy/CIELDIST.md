---
{"category_name":"easy","problem_code":"CIELDIST","problem_name":"Minimum Distance","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2.013,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":"anton_lunyov","date_added":"2-01-2013","tags":{"0":"cakewalk","1":"cook30","2":"laycurse","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CIELDIST","time":{"view_start_date":1358709858,"submit_start_date":1358709858,"visible_start_date":1358709858,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>In Wolf town there are <b>2</b> big markets <b>S</b> and <b>T</b>. The distance between these markets is <b>D</b>. Chef Ciel would like to run <b>2</b> restaurants in Wolf town, where the first restaurant will be supplied by the market <b>S</b> and the second one will be supplied by the market <b>T</b>. The markets run delivery service without charge within some distance, <b>D<sub>S</sub></b> and <b>D<sub>T</sub></b> respectively. Near these markets there are many rival restaurants. So Ciel decides to build one of her restaurants <b>exactly</b> at the distance <b>D<sub>S</sub></b> from the market <b>S</b>, and build the other restaurant <b>exactly</b> at the distance <b>D<sub>T</sub></b> from the market <b>T</b>.</p>
<p>Chef Ciel would like to build her restaurants as close as possible to each other for convenient communication. Your task is to calculate the minimum distance that could be achieved between her restaurants.</p>
<p><b>Note.</b> Wolf town can be considered as an infinite 2D Cartesian plane. The markets and Ciel's restaurants should be considered as <i>points</i> on a plane. The distance between the two points <b>A</b> and <b>B</b>, whose coordinates are <b>(A<sub>x</sub>, A<sub>y</sub>)</b> and <b>(B<sub>x</sub>, B<sub>y</sub>)</b> respectively, is defined by <b>Dist(A, B) = ((A<sub>x</sub> − B<sub>x</sub>)<sup>2</sup> + (A<sub>y</sub> − B<sub>y</sub>)<sup>2</sup>)<sup>1/2</sup></b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains three space-separated integers <b>D<sub>S</sub></b>, <b>D<sub>T</sub></b> and <b>D</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum possible distance between Ciel's restaurants that could be achieved. The output must have an absolute or relative error at most <b>0.000001 (10<sup>−6</sup>)</b>. Please, note that your output should not have more than <b>1000</b> digits after the decimal point, otherwise you may (or may not) get <i>wrong answer</i> or <i>runtime error (SIGXFSZ)</i>.</p>
<p>Note also that the answer could be <b>0</b>, which means that two Ciel's restaurants should be located at the same building.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>2013</b></li>
<li><b>1</b> ≤ <b>D<sub>S</sub></b>, <b>D<sub>T</sub></b>, <b>D</b> ≤ <b>2013</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
15 15 50
15 15 18
43 88 200
2013 2013 2013

<b>Output:</b>
20.000
0.0
69.00000
0
</pre><h3>Explanation </h3>
<p><b>Example case 1.</b> The distance between markets <b>S</b> and <b>T</b> is <b>50</b>. Assume for simplicity that <b>S</b> has coordinates <b>(0, 0)</b> and <b>T</b> has coordinates <b>(50, 0)</b>. Then Ciel could build her first restaurant <b>R<sub>S</sub></b> at the point <b>(15, 0)</b> and the second restaurant <b>R<sub>T</sub></b> at the point <b>(35, 0)</b>. This will ensure that the distance between <b>S</b> and <b>R<sub>S</sub></b> is <b>D<sub>S</sub> = 15</b> and the distance between <b>T</b> and <b>R<sub>T</sub></b> is <b>D<sub>T</sub> = 15</b>. The distance between restaurants appear to be <b>20</b> in this scenario. One can prove that this is the minimum possible distance.</p>
<p><b>Example case 2.</b> Here Ciel can locate both her restaurants at the same place. Indeed, if <b>S = (0, 0)</b> and <b>T = (18, 0)</b> then Ciel could locate both her restaurants at the point <b>R = (9, 12)</b>. To check this note that <b>Dist(R, S) = ((9 − 0)<sup>2</sup> + (12 − 0)<sup>2</sup>)<sup>1/2</sup> = (81 + 144)<sup>1/2</sup> = 225<sup>1/2</sup> = 15</b>. Similarly it can be verified that <b>Dist(R, T) = 15</b>.</p>
<p><b>Example case 3.</b> It is similar to the example case <b>1</b>. If <b>S = (0, 0)</b> and <b>T = (200, 0)</b> then the best way is to locate Ciel's restaurants at the points <b>R<sub>S</sub> = (43, 0)</b> and <b>R<sub>T</sub> = (112, 0)</b>. You can easily check by yourself that <b>Dist(S, R<sub>S</sub>) = 43</b>, <b>Dist(T, R<sub>T</sub>) = 88</b> and <b>Dist(R<sub>S</sub>, R<sub>T</sub>) = 69</b>.</p>
<p>Just to reiterate, your output can have any number of digits after the decimal point unless it is too long (more than <b>1000</b> digits after decimal point). However your output must have an absolute or relative error at most <b>10<sup>−6</sup></b>.</p>
