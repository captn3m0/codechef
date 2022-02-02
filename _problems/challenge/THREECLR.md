---
{"category_name":"challenge","problem_code":"THREECLR","problem_name":"Coloring Colorable Graphs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1.45235,"source_sizelimit":50000,"problem_author":"friggstad","problem_tester":"subra","date_added":"5-01-2011","tags":{"0":"challenge","1":"feb11","2":"friggstad"},"editorial_url":"http://discuss.codechef.com/problems/THREECLR","time":{"view_start_date":1297417174,"submit_start_date":1297417174,"visible_start_date":1297417328,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
The Chef has a list of dishes he must prepare and he is able to work on many of them simultaneously (with the help of his employees, of course). For example, he can heat soup, bake a cake, marinate some meat, let some wine aerate, etc. all at the same time since no two of them require a common cooking tool. Unfortunately, his kitchen is dangerously low in its supply of tools and he has no more than one copy of each cooking tool. This means that some dishes cannot be prepared at the same time such as slicing two different cuts of meat since there is only one meat slicer.

</p><p>
So, the Chef has scheduled the preparation of the dishes into rounds. In each round, he and his staff prepare some dishes of which no two require a common cooking tool. For simplicity's sake, he will not start preparing dishes from a certain round until all dishes from the previous round are completed.

</p><p>
The Chef received the orders for today's dishes early in the day and he has had a lot of time to think about how to optimally schedule them. In fact, he even found a way to prepare all of the dishes in only 3 rounds! Unfortunately, he lost the piece of paper that contained this schedule and he has to start preparing dishes right away.

</p><p>
He needs your help and he needs it fast! Your job is to assign, to each dish, a round in the schedule such that no two dishes scheduled in the same round require a common cooking tool. It doesn't matter if it uses more than three rounds. Of course, fewer rounds are preferred, but the Chef would be happy with any schedule right now.

<h3>Input</h3>
</p><p>
The first line contains in integer T denoting the number of test cases (at most 50). Each test case begins with two integers n and m where n denotes the number of dishes to be prepared and m denotes the number of pairs of dishes that require a common cooking tool. Following this is m lines, each containing two distinct integers u,v between 1 and n. This indicates that dishes u and v require a common cooking tool so they cannot be scheduled in the same round. No pair of dishes will appear more than once in the input.

</p><p>
The input will be such that there is a way to assign each dish to one of three rounds so that no two dishes in the same round require a common cooking tool. Of course, you won't be given this schedule.

</p><p>
Bounds: 1 ≤ n ≤ 500 and 0 ≤ m ≤ 10,000.

<h3>Output</h3>
</p><p>
The output for each test case is a single line containing n integers. These integers must be between 1 and n and the i'th such integer indicates the round that dish i is scheduled in. The scheduling must be done so that no two dishes that require a common cooking tool appear in the same round. However, any output that conforms to these constraints will be accepted.

<h3>Scoring</h3>
</p><p>
The score for a single test case is simply the largest integer that appears in the output for that test case. The total score over all test cases is the sum of the scores for the individual test cases. There are multiple test files, so your final score is the average of the scores over all test files.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
4 5
1 2
3 1
1 4
3 2
2 4
10 15
1 2
2 3
3 4
4 5
5 1
6 8
8 10
10 7
7 9
9 6
1 6
2 7
3 8
4 9
5 10
3 2
1 2
2 3

<b>Output:</b>
1 2 3 3
1 2 1 2 3 4 4 3 3 2
1 3 1
</pre>

<h3>Sample Output Score</h3>
</p><p>
The score for the first test case is 3 since only three rounds are used. The score for the second test case is 4 since four rounds are used. Note that this is not optimum as the assignment 1 2 3 1 2 2 1 1 3 3 is a valid way to schedule the dishes in only three rounds. Finally, the last test case has score 3. Even though only two rounds are used (rounds 1 and 3), the output specification says that the score will be the largest integer used as a round in the output.</p>