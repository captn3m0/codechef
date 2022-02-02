---
{"languages_supported":{"0":"NA"},"title":"MEANMEDI","category":"NA","old_version":true,"problem_code":"MEANMEDI","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>"Medians can't be very mean!", retorted Chef's brother. One would wish Chef's ego wouldn't 	come in the way, but Chef has taken up the challenge to prove otherwise. He asks for your help. Given N numbers, select 	K out of them, such that, the absolute difference between the mean and the median of the selected numbers, is as low 	as possible.</p>
<p>Mean of K numbers is defined as the sum of the numbers divided by K.</p>
<p>Median of K numbers is defined as the number that appears at the order index, floor((K+1)/2); 	that is, the I'th element in the sorted order of the K numbers (where numbering starts from 1), 	where I = floor((K+1)/2). Note that, if K is even, the median would be the smaller value among the two values that 	lie in the center.</p>
<h3>Input format</h3>
<p>The first line contains the number T, the number of test cases. In the following lines, 	T test cases follow (without any newlines between them.) Each case consists of only 2 lines. The first line of each test case contains N and K, separated by a single space. The second line contains N positive integers, separated by a single space.</p>
<h3>Output format</h3>
<p>For each test case, print the minimum absolute difference between the mean and the median 	that you can get, by selecting any K numbers, from the N numbers. Output the result rounded to 3 digits of precision 	after the decimal.</p>
<h3>Constraints</h3>
<p>1 ≤ T ≤ 20<br /> 1 ≤ N ≤ 60<br /> 1 ≤ K ≤ N<br /> 1 ≤ numbers ≤ 1200</p>
<h3>Sample input</h3>
<pre>2
8 2
4 9 1 3 5 9 4 10
5 4
10 7 4 5 9

</pre>
<h3>Sample output</h3>
<pre>0.000
0.500

</pre>
<h3>Explanation</h3>
<p>In the first case, you can select [4, 4].</p>
<p>In the second case, you can select [10, 7, 4, 9]. The mean would be 7.500, where as 	median would be 7.</p>
<p></p>    