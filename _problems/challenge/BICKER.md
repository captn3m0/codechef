---
category_name: challenge
problem_code: BICKER
problem_name: 'Bickering Cooks'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.591398'
source_sizelimit: '50000'
problem_author: friggstad
problem_tester: pieguy
date_added: 25-03-2011
tags:
    - friggstad
    - may11
    - medium
editorial_url: 'http://discuss.codechef.com/problems/BICKER'
time:
    view_start_date: 1305106425
    submit_start_date: 1305106425
    visible_start_date: 1305106338
    end_date: 1735669800
    current: 1525454468
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.The cooks in the Chef's kitchen are bickering quite a bit today. Frankly, the Chef can't stand it and he wants to send some of the cooks to his other restaurant to help keep the peace. Unfortunately, some cooks work well in pairs and splitting this pair up will affect the overall quality of the food prepared in the kitchen.

More formally, for each pair of cooks (i,j) the Chef is able to quantify how disruptive their bickering is by a non-negative value d(i,j). The Chef is also able to quantify the overall quality decrease in the food if the pair (i,j) is split up by a non-negative value q(i,j).

He wants to split up (partition) the cooks into two non-empty groups S and T. This means every cook i is in either S or T, but not both. The value d(S,T) is then the total sum of the values d(i,j) over pairs (i,j) with i in S and j in T or i in T and j in S. The value q(S,T) is similarly defined as the total sum of the values q(i,j) over pairs (i,j) with i in S and j in T or i in T and j in S.

Let qTot denote the total of all q(i,j) values and let dTot denote the total of all d(i,j) values. Finally, we say the cost effectiveness of the partition S,T is then (q(S,T)/d(S,t))\*(dTot/qTot) which measures the fraction of all q(i,j) values represented in q(S,T) divided by the fraction of all d(i,j) values represented in d(S,T). The Chef wants to find such a partition S,T to minimize the cost effectiveness. The idea is that the Chef wants to separate many disruptive pairs while somehow minimizing the effect it has on the food.

### Input

The first line contains a single integer T between 1 and 30 indicating the number of test cases. Each test case begins with three integers N, D, and Q. This means there are N cooks with precisely D pairs having d(i,j) &gt; 0 and precisely Q pairs having q(i,j) &gt; 0. The cooks are identified with the integers 1 through N. Then D lines follow, each containing three integers i,j,v. Such a line means d(i,j) = v. Following this are Q lines, each containing three integers i,j,w. This means q(i,j) = w. Bounds: 2 ≤ N ≤ 500 and 1 ≤ D,Q ≤ 10,000. In each line i,j,v describing a disruptive pair we have 1 ≤ i &lt; j ≤ N and 1 ≤ v ≤ 10,000. Similarly, in each of the last Q lines i,j,w we have 1 ≤ i &lt; j ≤ N and 1 ≤ w ≤ 10,000. No pair of cooks (i,j) will appear more than once among the disruptive pairs and neither will they appear more than once in the last Q lines of the test case. It might be that a pair (i,j) appears in the list of D disruptive pairs as well as in the list of Q pairs of cooks that work well together (a love/hate relationship).

If any pair i,j does not appear among the D disruptive pairs, then you are to assume that d(i,j) = 0. Similarly, if any pair i,j does not appear among the Q pairs that work well together, then you are to assume that q(i,j) = 0.

### Output

The output for each test case consists of a single line. The first integer on this line, say k, denotes the size of S in a partition of the N cooks into two non-empty groups S,T. Of course, this means 1 ≤ k ≤ N-1. Following k should be k integers between 0 and N-1 in strictly increasing order. These k integers describe the cooks in group S.

The only further restriction on the output is that d(S,T) must be non-zero. Otherwise it is pointless to split the cooks into these groups. Any output that conforms to these specifications is considered valid and will be assigned a score according to the scoring mechanism described below. Of course, lower scores will rank higher among the valid submissions.

### Example

<pre>
<b>Input:</b>
2
3 3 3
1 2 1
1 3 2
2 3 3
1 2 3
1 3 1
2 3 2
5 1 6
1 5 1
1 2 1
2 3 1
3 4 1
4 5 1
1 5 1
2 4 1

<b>Output:</b>
1 2
3 1 2 5
</pre>
### Scoring

Say the output for a test case describes a set S. Then T will automatically be equal to the cooks that are not in S. The score for the test case is then (q(S,T)/d(S,T))\*(dTot/qTot). The overall score over all test cases in a single file is the sum of the scores for each individual test case. Finally, there are multiple input files and the final score is the average of the scores over all files.

### Explanation of Sample Data

In the first test case, the pairs (1,2) and (2,3) are separated so q(S,T) = 5 and d(S,T) = 4. Since dTot = qTot = 6, then the score for the first test case is (5/4)\*(6/6) = 5/4.

In the second test case, the only bickering pair (1,4) is separated so d(S,T) = 1. The pairs that work well together that are separated are (2,3) and (4,5) so q(S,T) = 2. In this case, dTot = 1 and qTot = 6 so, the score for the second test case is exactly (2/1)\*(1/6) = 1/3.

### Test Cases

There are a few different types of test cases. Some are test cases that are generated randomly according to various distributions. Some are hand-crafted to defeat some simple approaches. Finally, some are test cases that are considered "difficult to solve".
