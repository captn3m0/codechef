---
{"languages_supported":{"0":"NA"},"title":"CLONES","category":"NA","old_version":true,"problem_code":"CLONES","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>A boolean function is a function of the form f: B<sub>n</sub> -&gt; B, where B = {0, 1} and n is a non-negative integer called the arity of the function. Some Boolean functions are projections: p<sub>n</sub><sup>k</sup>(x<sub>1</sub>, ..., x<sub>n</sub>) = x<sub>k</sub>. And given an m-ary function f, and n-ary functions g<sub>1</sub>, ..., g<sub>m</sub>, we can construct another n-ary function: h(x<sub>1</sub>, ..., x<sub>n</sub>) = f(g1(x<sub>1</sub>, ..., x<sub>n</sub>), ..., gm(x<sub>1</sub>, ..., x<sub>n</sub>)), called their composition. A set of functions closed under composition and containing all projections is called a clone. One trivial clone is a set of all boolean functions. Some of the special clones are:</p>
<ul>
<li>Z is a set of 0-preserving functions: f(0, ..., 0) = 0;</li>
<li>P is a set of 1-preserving functions: f(1, ..., 1) = 1;</li>
<li>D is a set of self-dual functions: !f(x<sub>1</sub>, ..., x<sub>n</sub>) = f(!x<sub>1</sub>, ..., !x<sub>n</sub>);</li>
<li>A is a set of affine functions: the functions satisfying that if f(a<sub>1</sub>, ..., c, ..., a<sub>n</sub>) = f(a<sub>1</sub>, ..., d, ..., a<sub>n</sub>) then f(b<sub>1</sub>, ..., c, ..., b<sub>n</sub>) = f(b<sub>1</sub>, ..., d, ..., b<sub>n</sub>), where c and d are at some position i. This should hold for every valid i, a<sub>1</sub>, ..., a<sub>n</sub>, b<sub>1</sub>, ... b<sub>n</sub>, c and d.</li>
</ul>
<p>Now we are interested how many n-ary functions are there in some combinations of mentioned above sets. For example, for n = 2, there are exactly 8 functions in Z, 4 functions in the intersection of Z and P, 8 function in the complement of A and so on.</p>

<h3>Input</h3>
<p>The first line of the input file contains n - the arity of the boolean functions we are looking at. The second line contains the q - number of queries. Each of the next q lines will describe a query. The query is a set expression. The expression will contain the following characters: 'Z', 'P', 'D', 'A' denoting the sets, described above; 'v' - which is set union; '^' - which is set intersection; '!' which is complement; '\' which is set difference; and also '(' and ')' to define operations priority. Operations in brackets have higher priority. Otherwise the '!' operation has the higher priority and 'v', '^' and '\' are of the same priority. It is guaranteed that the expression will be correct. See samples for some examples of set expressions.</p>

<h3>Constraints</h3>
<p>1 &lt;= n &lt;= 100<br />
1 &lt;= q &lt;= 100<br />
The length of each expression won't exceed 100 characters.</p>

<h3>Output</h3>
<p>For each query in the input print how many n-ary function are in the set described by the according set expression modulo 1000003.</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
6
Z
Z^P
!A
!(AvP)^D
AvZvP\A
!A^(Z\(Dv!P))

<b>Output:</b>
8
4
8
0
6
2

</pre>    