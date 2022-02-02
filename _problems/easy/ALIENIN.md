---
{"category_name":"easy","problem_code":"ALIENIN","problem_name":"Alien Invasion ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/6Deq0oLw-n0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"","date_added":"28-08-2020","tags":{"0":"binary","1":"easy","2":"greedy","3":"kingofnumbers","4":"kingofnumbers","5":"ltime87","6":"psychik"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/ALIENIN","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ALIENIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME87/hindi/ALIENIN.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME87/bengali/ALIENIN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME87/mandarin/ALIENIN.pdf), [Russian](https://www.codechef.com/download/translated/LTIME87/russian/ALIENIN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME87/vietnamese/ALIENIN.pdf) as well.

Chef is the leader of Chef's Earth Defense Organization, and his mission is to counter aliens which are threatening the earth. According to information gathered by the organization, there are $N$ alien spaceships (numbered $1$ through $N$) planning to invade the earth. The $i$-th spaceship will appear on the radar at time $C_i$. Each spaceship needs $D$ time to reach earth once it appears on the radar. 

Chef's organization owns a huge laser cannon which can destroy one spaceship in one shot. However, once the cannon is used once it needs some amount of cool-down time in order to be used again (first shot doesn't require cool-down time before it is used). This cool-down time, however, is configurable. It has to be set before the first shot, and cannot be changed after that. If Chef sets a lower cool-down time, that would increase the energy consumed by the cannon, and vice-versa - the higher the cool-down time, the lower the energy consumed.

This might be a long battle, and Chef wants to use as little energy as possible. So Chef wants to maximize the cool-down time while still being able to destroy all spaceships before any of them arrive on earth. In particular, the $i$-th spaceship should be shot between the times $C_i$ and $C_i + D$ (both end points inclusive).

###Input:
- The first line of input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two integers $N$ and $D$. 
- The second line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.

###Output:
For each test case, print a single line containing one real number― the maximum cool-down time possible. Your answer will be considered correct if the absolute or relative error of the answer does not exceed $10^{-6}$.

###Constraints 
- $1 \leq T \leq 1000$
- $2 \leq N \leq 10^5$
- $1 \leq C_i \leq 10^9$ for each valid $i$
- $1 \leq D \leq 10^9$
- The sum of $N$ over all test cases does not exceed $10^6$

###Subtasks
**Subtask #1 (50 points):** 
- $N \le 1,000$
- the sum of $N$ over all test cases does not exceed $10,000$

**Subtask #2 (50 points):** Original constraints


###Sample Input:
```
2
3 2
3 2 3
2 1
5 6
```
###Sample Output:
```
1.5000000000
2.0000000000
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>