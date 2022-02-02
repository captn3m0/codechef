---
{"category_name":"easy","problem_code":"PNTNG","problem_name":"Painting","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"rustinpiece","date_added":"31-05-2014","tags":{"0":"cook47","1":"easy","2":"greedy","3":"kostya_by","4":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/PNTNG","time":{"view_start_date":1403464500,"submit_start_date":1403464500,"visible_start_date":1403464500,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/mandarin2/PNTNG.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/russian/PNTNG.pdf">Russian</a> as well.</h3>
<p>You are given a transparent three-dimensional table, the height equals to <b>H</b> and the base is a two-dimensional table <b>N∙M</b>.</p>
<p>The layers of the 3D table are numbered from 1 to <b>H</b>. Each layer is a two-dimensional table, the rows are numbered from 1 to <b>N</b> and the columns are numbered from 1 to <b>M</b>. A pair <b>(i, j)</b> (1 ≤ <b>i</b> ≤ <b>N</b>, 1 ≤ <b>j</b> ≤ <b>M</b>) corresponds to the cell at the intersection of <b>i</b>'th row and <b>j</b>'th column of a two-dimensional table.</p>
<p>We can paint cells of the three-dimensional table, but not more than <b>T<sub>k</sub></b> cells on <b>k</b>'th layer can be painted. Painting of one cell on <b>k</b>'th layer costs <b>C<sub>k</sub></b>. Your task is to find the minimum cost of painting the table thus that it can't be seen throught from the top (there is no cell which is unpainted on every layer). Formally you need to find a painting, that for any pair <b>(i, j)</b> (1 ≤ <b>i</b> ≤ <b>N</b>, 1 ≤ <b>j</b> ≤ <b>M</b>) there is a layer <b>k</b> (1 ≤ <b>k</b> ≤ <b>H</b>), where cell <b>(i, j)</b> is painted. If there is no such a painting then the answer is "Impossible". </p>
<h3>Input</h3>
<p>The first line contains three integers <b>N</b>, <b>M</b> and <b>H</b>.</p>
<p>Each of the next <b>H</b> lines contains two integers <b>T<sub>k</sub></b> and <b>C<sub>k</sub></b>.</p>
<h3>Output</h3>
<p>The output should contain the minimum cost of the painting if there is one, otherwise output Impossible without quotes.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>N∙M</b> ≤ 10<sup>12</sup>;</p>
<p>1 ≤ <b>H</b> ≤ 100000;</p>
<p>0 ≤ <b>T<sub>k</sub></b> ≤ 10<sup>12</sup>, for each layer;</p>
<p>0 ≤ <b>C<sub>k</sub></b> ≤ 10<sup>5</sup>, for each layer.</p>
<h3>Example 1</h3>
<pre><b>Input:</b>
3 4 2
6 1
6 2

<b>Output:</b>
18
</pre><h3>Example 2</h3>
<pre><b>Input:</b>
2 2 3
1 1
1 2
1 3

<b>Output:</b>
Impossible
</pre><h3>Explanations</h3>
<p>
In the first example, we should paint 6 cells on the first layer and 6 cells on the second layer.<br /><br />
In the second example, there are not enough cells to paint the table properly.
</p>
