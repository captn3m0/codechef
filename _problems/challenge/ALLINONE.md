---
{"category_name":"challenge","problem_code":"ALLINONE","problem_name":"The Amazing All-In-One Cooking Machine - Challenge","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1.38751,"source_sizelimit":50000,"problem_author":"friggstad","problem_tester":"pieguy","date_added":"7-02-2011","tags":{"0":"challenge","1":"friggstad","2":"march11"},"editorial_url":"http://discuss.codechef.com/problems/ALLINONE","time":{"view_start_date":1300081441,"submit_start_date":1300081441,"visible_start_date":1300081441,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
The Chef has recently sold a number of his amazing all-in-one cooking machines! These machines can be used to prepare virtually any recipe you want. Unfortunately, there seems to be a major flaw in many of these devices.

</p><p>
The problem can be fixed very quickly with the right replacement part (it takes essentially 0 time). Since the Chef endorsed these devices so much, he takes it upon himself to perform all of the repairs. He has a list of clients that need their devices repaired as well as a map of the city so he can find the most efficient route between any two clients.

</p><p>
The Chef wants to repair these devices as fast as possible. However, since customer satisfaction is very important, his goal is to visit the clients in some order that minimizes the average time each client waits to be served. Specifically, we let T(i) denote the amount of time it takes for the Chef to reach client i from the moment he starts traveling given that he visits all clients that appear before client i on the list in the given order. Then the Chef's goal is to minimize the average of the waiting times, which is (T(1) + T(2) + ... + T(k))/k if there are k clients.

<h3>Input</h3>
</p><p>
The first line contains a single positive integer T ≤ 30 indicating the number of test cases to follow. Each test case begins with three integers N, M and K written on a single line. Here, N is the number of intersections in the city, K is the number of clients and M is the number of streets to follow. The intersections are numbered from 0 to N-1 and the Chef begins at intersection 0.

</p><p>
Following this is a single line containing K integers describing the locations of the clients. The i'th such integer (between 1 and N-1) indicates the intersection where the i'th client resides. Note that any particular intersection may contain more than one client. Note also that no clients are located at intersection 0.

</p><p>
Then M lines follow, each describing a street. A street is given by three integers U,V, and D where U,V are distinct integers between 0 and N-1 describing the endpoints of the street and D is a positive integer that indicates how long it takes to travel from U to V along this road. No two intersections will be the endpoint of more than one road. Furthermore, it will always be possible reach all clients from intersection 0.

</p><p>
Bounds: 2 ≤ N ≤ 300, 1 ≤ K ≤ 10000, and 1 ≤ M ≤ 2000. Furthermore, each street distance D is between 1 and 1000.

<h3>Output</h3>
</p><p>
For each test case you are to output a permutation of the integers from 1 to K on a single line. This is the order in which the Chef will visit the clients. It does not need to be optimal, any permutation from 1 to K will be accepted. However, your goal should be to try and make the average waiting times of the clients as small as you possibly can in your solution. Your solution will be scored according to the following scoring mechanism.

<h3>Scoring</h3>
Starting from intersection 0, the Chef will visit these clients in the order they appear in the output. If we define T(0) = 0, then the time it takes to reach client i ≥ 1, say T(i), is precisely T(i-1) plus the shortest time that the Chef can reach the intersection containing client i in this list from the intersection containing client i-1 in this list. The score for a particular test case is then (T(1) + T(2) + ... + T(K))/K. The overall score over all test cases in a test file is simply the sum of the scores of each individual test case.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
4 3 3
1 2 3
0 1 1
0 2 10
1 3 100
5 6 10
1 2 3 2 3 4 3 2 3 2
0 1 2
0 2 4
0 3 3
3 4 2
4 2 1
2 1 1
3 2 10
1 1 1 1 1 1 1 1 1 2
0 1 5
0 2 1


<b>Output:</b>
1 3 2
2 4 8 10 3 5 7 9 1 6
1 2 3 4 5 6 7 8 9 10
</pre>

<h3>Explanation of Sample Data</h3>
</p><p>
The optimal solution for the first test case is actually 1 2 3, but 1 3 2 is a valid ordering according to the problem description so it is accepted. Client 1 only waits 1 unit of time to be served. The time to travel from client 1 to client 3 is 100 units of time so client 3 must wait a total of 101 units of time to be served. Then, traveling from client 3 to client 2 takes 111 units of time so client 2 waits a total of 212 units of time to be served. Thus, the average amount of time it takes for a client to be served is then (1 + 101 + 212)/3 = 314/3 and that will be the score for the output on this test case.

</p><p>
The other two test cases are analyzed similarly. In the third test case, all of the clients at location 1 are visited first. It takes 5 units of time to travel to location 1 and serve the first client. However, since we assume it takes 0 time to serve a client we can take care of the rest of the clients at location 1 immediately. So, each client at location 1 waited only 5 units of time to be served meaning the total time waited by all clients at this location is 45 units. Finally, it takes 6 units of time to travel to the sole client at location 2 so the average time waited by the clients is then 56/10.

</p><p>
Overall, the score for the entire set of data (being the sum of the scores of individual test cases) is 116.066667.

<h3>Test Data</h3>
Some test data has been hand crafted to make certain heuristics perform poorly and some has been generated randomly from a variety of distributions.</p>