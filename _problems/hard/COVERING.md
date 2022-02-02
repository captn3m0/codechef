---
{"category_name":"hard","problem_code":"COVERING","problem_name":"Covering Sets","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"24-10-2014","tags":{"0":"cook52","1":"divide","2":"inclusn","3":"kostya_by","4":"medium","5":"sets"},"editorial_url":"http://discuss.codechef.com/problems/COVERING","time":{"view_start_date":1416768153,"submit_start_date":1416768153,"visible_start_date":1416767794,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/COVERING.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/COVERING.pdf">Russian</a> as well.</h3>
<p>
	Let's consider a set <b>S</b> of <b>N</b> different elements numbered from <b>0</b> to <b>N - 1</b>. It's a well-known fact that there are exactly 2<sup><b>N</b></sup> subsets of <b>S</b> (including the empty subset). Each subset <b>S'</b> of <b>S</b> can be encoded as a bitmask <b>B(S')</b> containing <b>N</b> bits, where the <b>i</b>'th bit of <b>B(S')</b> is equal to 1 if the <b>i</b>'th element of <b>S</b> belongs to <b>S'</b>, and 0 otherwise. Each bitmask can also be considered as a non-negative integer represented in binary.
</p>
<p>
	For example, suppose <b>N</b> is equal to 5. Then <b>S</b> = {0, 1, 2, 3, 4}. Let's assume <b>S'</b> = {0, 3, 4}. Then <b>B(S')</b> = 1 × 2<sup>0</sup> + 0 × 2<sup>1</sup> + 0 × 2<sup>2</sup> + 1 × 2<sup>3</sup> + 1 × 2<sup>4</sup> = 11001<sub>2</sub> = 25<sub>10</sub>.
</p>
<p>
	Let's say that a triple (<b>A</b>, <b>B</b>, <b>C</b>) of subsets of <b>S</b> <i>covers</i> a subset <b>D</b> of <b>S</b>, if <b>D</b> is a subset of the union of subsets <b>A</b>, <b>B</b> and <b>C</b>. In other words, every element of <b>D</b> is an element of at least one of <b>A</b>, <b>B</b>, or <b>C</b>.
</p>
<p>
	Let's consider four functions <b>F</b>, <b>G</b>, <b>H</b> and <b>R</b>. Each takes a subset of <b>S</b> as the only parameter and returns a non-negative integer. You are given the values of <b>F(i)</b>, <b>G(i)</b>, and <b>H(i)</b> for each 0 ≤ <b>i</b> &lt; 2<sup><b>N</b></sup>.
</p>
<p>
	The value of the function <b>R</b> of a subset <b>X</b> of <b>S</b> is equal to the sum of <b>F(A)</b> × <b>G(B)</b> × <b>H(C)</b> for all triples (<b>A</b>, <b>B</b>, <b>C</b>) of subsets of <b>S</b> that cover <b>X</b>.
</p>
<p>
	Your task is to calculate <b>R(0)</b> + <b>R(1)</b> + ... + <b>R(2<sup>N</sup> - 1)</b> modulo 1000000007(10<sup>9</sup> + 7).
</p>
<h3>Input</h3>
<p>
	The first line of the input contains one integer <b>N</b>.
</p>
<p>
	The second line of the input contains 2<sup><b>N</b></sup> integers, denoting the values of <b>F(0)</b>, <b>F(1)</b>, ..., <b>F(2<sup>N</sup> - 1)</b>. The third and the fourth lines of the input contains the values of <b>G</b> and <b>H</b> in the same format.
</p>
<h3>Output</h3>
<p>
	The output should contain one integer: <b>R(0)</b> + <b>R(1)</b> + ... + <b>R(2<sup>N</sup> - 1)</b> modulo 1000000007(10<sup>9</sup> + 7).
</p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 20;</p>
<p>0 ≤ <b>F<sub>i</sub></b>, <b>G<sub>i</sub></b>, <b>H<sub>i</sub></b> &lt; 1,000,000,007(10<sup>9</sup> + 7).</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 3 9 12
0 5 1 2
2 3 4 1

<b>Output:</b>
7680

</pre><h3>Explanations</h3>
<p>
Here's the table of what sets are covered by all the possible triples for <b>N</b> = 1:</p>
<table>
<tr>
<td>A</td>
<td>B</td>
<td>C</td>
<td>D</td>
</tr>
<tr>
<td>0</td>
<td>0</td>
<td>0</td>
<td>{0}</td>
</tr>
<tr>
<td>0</td>
<td>0</td>
<td>1</td>
<td>{0, 1}</td>
</tr>
<tr>
<td>0</td>
<td>1</td>
<td>0</td>
<td>{0, 1}</td>
</tr>
<tr>
<td>0</td>
<td>1</td>
<td>1</td>
<td>{0, 1}</td>
</tr>
<tr>
<td>1</td>
<td>0</td>
<td>0</td>
<td>{0, 1}</td>
</tr>
<tr>
<td>1</td>
<td>0</td>
<td>1</td>
<td>{0, 1}</td>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>0</td>
<td>{0, 1}</td>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>1</td>
<td>{0, 1}</td>
</tr>
</table>

