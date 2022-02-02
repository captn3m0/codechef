---
{"category_name":"easy","problem_code":"RLEVEL","problem_name":"2 - Reach a level","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":"","date_added":"7-08-2020","tags":{"0":"isaf27"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1607770800,"submit_start_date":1607770800,"visible_start_date":1607770800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RLEVEL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are playing a computer game. This game has $n$ levels numbered with the integers from $1$ to $n$. At any point in time, you are located at one of the levels with some **penalty**, represented by a non-negative real number. Initially, you start at level $1$ with penalty $0$.

There are $m$ options to change levels. Each option is described by pair of levels $s$, $f$ (possibly equal) and penalty $p$ (non-negative integer). You can use this option if your current level is $s$. If your penalty is currently $c$, then after using this option your level will become $f$ and your penalty will become $\frac{c}{2}+p$. Options can be used more than once.

For each level $i$ ($1 \leq i \leq n$), check whether it is possible for you to get to level $i$ using some **finite** sequence of operations. If it is possible, find the **infimum** of the set of all possible penalties you could have at level $i$. More formally, find the minimum real number $x$ such that for all $\epsilon > 0$, there exists some finite sequence of operations after which you will be located at level $i$ with penalty $c < x + \epsilon$.

###Input:

The first line contains one integer number $t$ - the number of test cases. The next lines describe test cases.

The first line of each test case contains two positive integers $n$, $m$ - the number of levels and the number of options.

Each of next $m$ lines contains three integers $s$, $f$, $p$, describing an option.

###Output:

For each test case print $n$ lines.

In the $i$-th line print $-1$ if it is impossible to get to level $i$ using a finite sequence of operations. Otherwise, print the value of the infimum of the set of all possible penalties that you could have at level $i$.

The answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$.

Formally, if your answer is $a$ and jury's answer is $b$ then your answer will be considered correct if $\frac{|a-b|}{\max{(1, |b|)}} \leq 10^{-6}$.

###Constraints 

- $1 \leq t \leq 10^5$
- $1 \leq n, m \leq 200\,000$
- $1 \leq s, f \leq n$, $0 \leq p \leq 10^9$
- the sum of $n$ for all test cases does not exceed $200\,000$
- the sum of $m$ for all test cases does not exceed $200\,000$

###Subtasks

**Subtask #1 (25 points):** 
- $t \leq 1000$
- the sum of $n$ for all test cases does not exceed $1000$
- the sum of $m$ for all test cases does not exceed $1000$

**Subtask #2 (25 points):** $s \leq f$ for all options

**Subtask #3 (50 points):** original constraints

###Sample Input:

```
3
4 5
1 2 1
2 3 2
3 3 1
3 4 0
2 4 1
7 10
1 3 3
1 2 4
1 6 5
2 3 2
3 4 3
4 5 5
5 2 1
5 3 1
4 6 2
7 1 239
3 2
2 3 0
3 2 0
```

###Sample Output:

```
0.000000000000
1.000000000000
2.000000000000
1.000000000000
0.000000000000
4.000000000000
3.000000000000
4.500000000000
7.250000000000
4.250000000000
-1
0.000000000000
-1
-1
```

###EXPLANATION:

In the first test case let's consider level $3$. You can reach this level using the first option and the second option after that. Your penalty will be $\frac{1}{2} + 2 = 2.5$. Then we can use the third option $k$ times after it for any $k \geq 0$. It's easy to see that the penalty converges to $2$ as $k \to \infty$. It can be proven that $2$ is the infimum of the penalty for level $3$.

This picture describes the options for the second test case:

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/BENDSP02/RLEVEL/RLEVEL.png" alt="sample 2 picture" height="100%" width="100%">

In the third test case, neither levels $2$ nor $3$ are reachable.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>