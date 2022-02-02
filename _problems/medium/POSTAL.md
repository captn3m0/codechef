---
{"languages_supported":{"0":"NA"},"title":"POSTAL","category":"NA","old_version":true,"problem_code":"POSTAL","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>The Chef is on vacation in the beautiful country of Chefville. The island is a narrow strip of land running from north to south. A single road from north to south connects all the villages in the country. There, he observed, the postal services works in a very curious way.<br /><br /> There is a postman for every village. In the morning, say postman A, starts traveling to the North, disbursing all the mails on the way. When he meets another postman coming from the opposite direction on the way, say B, A hands over all the mails to B which are to be delivered to addresses that lie in the North and vice versa for B. Then both turn back and start traveling in the opposite directions. So, now A travels to the South and when he meets another postman on the way, the same thing happens again. This keep on till the duty hours of the day finishes and they don't loose any time in the swapping and turning back. All postmen travel at the same speed of 1 m/s always and they arbitrarily choose their direction to start with in the morning. <br /><br /> Now, at any given time of the day, the Chef wants to know the position of any given postman and the number of times he has met another postman till that time (including this moment of time).</p>
<h3>Input</h3>
<p>The road can be considered to stretch infinitely in both the directions for this problem. The first line contains the total number of test cases (&lt;= 10). Each of the case begins with N (0 &lt; N &lt;= 500) on a separate line, the total number of villages in Chefville. The next line contain N distinct integers separated by space which are the positions (between 0 and 1000000000, in meters including those, 0 being the position of a northern point on the strip) in increasing order of the N villages on the road. The next line the initial directions of the corresponding postmen of the villages as N integers which are either 0 or 1. 0 means North and 1 South. Then comes the total number of queries Q (&lt;= 1000) for this test case on separate line. The next Q lines contain two integers, first the postman number I (0 &lt;= I &lt; N) and then the time T (&lt;= 1000000000 in seconds).</p>
<h3>Output</h3>
<p>For every query of a test case, you have to output the position of the postman number I at time T and the number times he has met another postman till then, on the same line separated by a space.</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
5
1 24 28 34 94 
0 1 0 0 0 
2
2 11
0 9

<b>Output:</b>
23 2
-8 0

</pre>
<p></p>    