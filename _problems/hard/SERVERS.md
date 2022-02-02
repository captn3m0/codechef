---
{"languages_supported":{"0":"NA"},"title":"SERVERS","category":"NA","old_version":true,"problem_code":"SERVERS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>The servers working at the Chef's restaurant communicate over a distance using wireless devices to relay requests as quickly as possible. Each server has exactly one device. However, unforseen technical difficulties make it such that some pairs of devices cannot communicate directly. Still, if a server A wants to communicate with another server B but their devices don't communicate directly, then server A may ask relay their request to server B using intermediate devices/servers.</p>
<p>There are two additional complications. First, the Chef is worried that relaying requests using intermediate servers may get confusing. Thus, for any two servers who can communicate, either directly or indirectly through other servers, there should be a unique way to pass messages between these servers. Second, each pair of devices that can communicate directly does so over a specified frequency. However, if too many pairs of devices communicate over the same frequency, then the messages may be corrupted.</p>
<p>Because of these two problems, the Chef has ordered that some pairs of devices be forbidden to communicate. This may result in some pairs of servers who could communicate before to be unable to communicate, but the Chef thinks this negative effect is outweighed by the guarantee that the above problems don't occur.</p>
<p>Your goal is to determine the maximum number of pairs of devices that may be allowed to communicate directly without having to go through intermediate devices. To restate the constraints, if S is such a set of pairs of devices then there should be at most one way to relay a message between any two servers using only pairs of devices in S. Furthermore, for each frequency f, the number of pairs of devices in S that communicate over frequency f is less than 

<span class="Apple-style-span"><b>or equal to </b></span>some prescribed value c(f).</p>
<h3>Input</h3>
<p>The first line of input contains a single integer T ≤ 30 indicating the number of test cases. Each test case begins with three integers n,m, and k on a single line. Here, n is the number of servers, m is the number of pairs of devices that are able to communicate directly, and k is the number of available frequencies. The next line consists of k integers, each between 1 and m, where the i'th such integer is the value c(i) specifying how many devices may communicate using frequency i without worrying about messages being corrupted.</p>
<p>Following this is m lines where each line describes a pair of devices that may communicate directly. Each line begins with two distinct integers u,v, each between 1 and n, and ends with an integer f, between 1 and k. This means that devices u and v may communicate directly using frequency f. No pair of devices will appear more than once in the input. There will be a blank line separating test cases including a blank line preceding the first case.</p>
<p>Bounds: 1 ≤ n ≤ 40, 1 ≤ m ≤ 200, and 1 ≤ k ≤ m.</p>
<h3>Output</h3>
<p>For each test case you are to output a single line consisting of a single integer. This integer should be the size of S where S is a maximum size subset of communicating pairs satisfying the constraints outlined in the last paragraph of the problem description.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3

4 4 2
1 1
1 2 1
2 3 2
3 4 1
4 1 2

4 4 1
4
1 2 1
2 3 1
3 4 1
4 1 1

5 7 2
3 1
1 2 1
2 3 1
3 1 1
4 1 2
4 2 2
5 1 2
5 2 2

<b>Output:</b>
2
3
3
</pre>
<h3>Notes On The Sample Data</h3>
<p>One solution to the first test cases uses communicating pairs (1,2) and (2,3). We can't have 3 pairs since one of the frequencies would then be used by two devices. A solution for the second test case uses pairs (1,2), (2,3), and (3,4). All four pairs may not be used since there would be multiple ways for 1 and 3 to communicate (using either 2 or 4 as an intermediate device).</p>
<p>Finally, one solution to the last test case uses (1,2), (2,3), and (4,1). One cannot have 4 pairs for the following reason. We can't use all of (1,2),(2,3), and (3,1) since this creates more than one way for 1 and 2 to communicate. On the other hand, we can't use two of (4,1),(4,2),(5,1), or (5,2) since this would violate the bound on the frequencies.</p>    