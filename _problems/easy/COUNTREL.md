---
{"languages_supported":{"0":"NA"},"title":"COUNTREL","category":"NA","old_version":true,"problem_code":"COUNTREL","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3> <p>Let A be a set of the first <b>N</b> positive integers :A={1,2,3,4.........N}
<br />
Let B be the set containing all the subsets of A.
<br /><br />
</p><p>Professor Eric is a mathematician who defined two kind of relations R1 and R2 on set B. 
<br />
The relations are defined as follows:
<br /><br />
R1={ (x,y) : x and y belong to B <b>and</b> x is not a subset of y <b>and</b> y is not a subset of x <b>and</b> the intersection of x and y is equal to empty set }
<br /><br />
R2={ (x,y) : x and y belong to B <b>and</b> x is not a subset of y <b>and</b> y is not a subset of x <b>and</b> the intersection of x and y is not equal to empty set }
<br /><br />
</p><p>Now  given the number N,Professor Eric wants to know how many relations of kind R1 and R2 exists.Help him. 
<br /><br />
 <b>NOTE :</b> (x,y) is the same as (y,x) ,i.e the pairs are <b>unordered</b>.
<h3>Input format:</h3>
</p><p>The first line contains the number of test cases T.Each of the test case is denoted by a single integer N.
<h3>Output format:</h3>
</p><p>Output T lines, one for each test case,containing  two integers denoting the number of relations of kind R1 and R2 respectively, modulo 100000007.
<h3>Example</h3>
<pre>
<b>Sample Input:</b>
3
1
2
3
<b>Sample Output:</b>
0 0
1 0
6 3
<b>Constraints:</b>
1 &lt;= T &lt;= 1000
1 &lt;= N &lt;= 10^18
<b>Explanation:</b>
Let A={1,2}
Then B={Phi,{1},{2},{1,2}}
Phi=Empty Set
So R1=Either {({1},{2})} or {({2},{1})}
and R2=No relation exists
So,there is 1 relation of kind R1 and 0 relation of kind R2.
</pre>
<br /></p>    