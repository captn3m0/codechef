---
{"languages_supported":{"0":"NA"},"title":"CANDY","category":"NA","old_version":true,"problem_code":"CANDY","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>The chef is a fan of candies with chocolate and caramel, and has devoted much of his life to finding the perfect ratio of chocolate to caramel. He recently discovered the perfect ratio, but to his dismay, none of his favourite candy shoppes sell candies with exactly that ratio. So the chef crafted a plan to buy several candies, and melt them together into a larger candy so that the resulting candy will have the perfect ratio. How many candies will he have to buy? The chef may buy multiple candies of the same type.</p>
<h3>Input:</h3>
<p>Input begins with an integer N, the number of different candies available at the various shoppes. N lines follow, each containing 2 integers Chocolate<sub>i</sub> and Caramel<sub>i</sub> indicating the grams of chocolate and caramel, respectively, contained in the (i)th candy. Finally, there is a line containing 2 integers desiredChocolate and desiredCaramel, indicating the chef's desired ratio of chocolate to caramel.</p>
<h3>Output:</h3>
<p>For each test case, output on a single line the minimum number of candies the chef will have to buy. If it is impossible to produce a candy with the desired ratio, output -1 instead.</p>
<h3>Example</h3>
<p><b>Input 1:</b></p>
<pre>3
4 5
2 4
4 1
1 1
 </pre>
<p> </p>
<p><b>Output 1:</b></p>
<pre>3
 </pre>
<p> </p>
<p>In this example, the chef purchases one of each candy and combines them to form a candy with 10 grams chocolate and 10 grams caramel.</p>
<p><b>Input 2:</b></p>
<pre>3
2 3
4 6
10 15
5 8
 </pre>
<p> </p>
<p><b>Output 2:</b></p>
<pre>-1
 </pre>
<p> </p>
<h3>Constraints:</h3>
<p>1 ≤ N ≤ 15<br /> 1 ≤ Chocolate<sub>i</sub> ≤ 500<br /> 1 ≤ Caramel<sub>i</sub> ≤ 500<br /> 1 ≤ desiredChocolate ≤ 500<br /> 1 ≤ desiredCaramel ≤ 500<br /> For all candies, Chocolate<sub>i</sub>/Caramel<sub>i</sub> ≠ desiredChocolate/desiredCaramel<br /> No two candies will be identical.</p>
<p></p>    