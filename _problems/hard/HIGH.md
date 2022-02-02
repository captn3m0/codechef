---
{"languages_supported":{"0":"NA"},"title":"HIGH","category":"NA","old_version":true,"problem_code":"HIGH","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p>
In some countries building highways takes a lot of time... Maybe that's because there are many possiblities to construct a network of highways and engineers can't make up their minds which one to choose. Suppose we have a list of cities that can be connected directly. Your task is to count how many ways there are to build such a network that between every two cities there exists exactly one path. Two networks differ if there are two cities that are connected directly in the first case and aren't in the second case. At most one highway connects two cities. No highway connects a city to itself. Highways are two-way.  A path X-Y-W-A is the same as the path A-Y-W-A.
</p>
<h3>Input</h3>
<p>
The input is to be read from the standard input of your program. It begins with an integer 't', the number of test cases (equal to about 1000), followed by a new line, followed by the 't' test cases.</p>
<p>The first line of each test case contains two integers, the number of cities (1&lt;=n&lt;=12) and the number of direct connections between them.<br />
Each next line contains two integers, which are the specific numbers of cities that can be connected. Cities are numbered from 1 to n.<br />
Consecutive test cases are separated with one blank line. The last line of input is terminated by a newline.</p>
<h3>Output</h3>
<p>
The number of ways to build the network, for every test case in a separate line. Assume that when there is only one city, the answer should be 1. The answer will fit in a signed 64-bit integer.
</p>
<h3>Example</h3>
<pre><b><tt>Sample input:</tt></b>
4
4 5
3 4
4 2
2 3
1 2
1 3

2 1
2 1

1 0

3 3
1 2
2 3
3 1

<b><tt>Sample output:</tt></b>
8
1
1
3

</pre>    