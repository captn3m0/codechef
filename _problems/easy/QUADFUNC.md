---
{"category_name":"easy","problem_code":"QUADFUNC","problem_name":"Quadratic Functions","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"17-12-2017","tags":{"0":"wittyceaser"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>f(x) and g(x) are two quadratic polynomials:
	<ul>
		<li>
			f(x) = <b>A</b>x<sup>2</sup> + <b>B</b>x + <b>C</b>
		</li>
		<li>
			g(x) = <b>D</b>x<sup>2</sup> + <b>E</b>x + <b>F</b>
		</li>
	</ul>
</p>
<p>
	It is guaranteed that f(x) and g(x) do not intersect. That is, there is no real number r, such that f(r) = g(r). 
</p>
<p>
	You need to find a quadratic polynomial h(x) = Px<sup>2</sup> + Qx + R such that the sum of areas under the curves |f(x) - h(x)| and |g(x) - h(x)| is minimized between integer points x = <b>L</b> and x = <b>R</b>.
</p>
<p>
	Output this minimized sum of the areas of curves |f(x) - h(x)| and |g(x) - h(x)| from x = <b>L</b> and x = <b>R</b>. Print this number as a fraction <b>U</b>/<b>V</b>, where <b>U</b> and <b>V</b> are positive integers and gcd( <b>U</b>, <b>V</b>) = 1. 
</p>

<h3>Input</h3>
	<ul>
		<li>
			First line contains a single integer <b>T</b> - the total number of testcases.
		</li>
		<li>
			Each testcase is described by 3 lines. 
			<ul>
				<li>
					The first line contains 3 space-separated integers <b>A</b>, <b>B</b> and <b>C</b>.
				</li>
				<li>
					The second line contains 3 space-separated integers <b>D</b>, <b>E</b> and <b>F</b>.
				</li>
				<li>
					The third line contains 2 space-separated integers <b>L</b> and <b>R</b>.
				</li>
			</ul>
		</li>
	</ul>


<h3>Output</h3>
<p>
			For each testcase, print a single line containing the sum of areas as the required fraction.
</p>

<h3>Constraints</h3>
	<ul>
		<li>
			1 ≤ <b>T</b> ≤ 10<sup>3</sup>
		</li>
		<li>
			1 ≤ <b>A, B, C, D, E, F</b> ≤ 10<sup>3</sup>
		</li>
		<li>
			-10<sup>3</sup> ≤ <b>L</b> ≤ <b>R</b> ≤ 10<sup>3</sup>
		</li>
		<li>
			<b>P</b>, <b>Q</b>, <b>R</b> need to be real numbers.
		</li>
	</ul>

<h3>Example</h3>
<pre><b>Sample Input</b>
1
1 1 1
2 2 2
-1 2

<b>Sample Output</b>
15/2
</pre>

<img src="https://codechef_shared.s3.amazonaws.com/download/upload/AMR17AMR/QUADFUNC/1.png" height="450" width="550">