---
{"category_name":"easy","problem_code":"EXUNC","problem_name":"Yet Another Partition Problem","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"bharat2002","problem_tester":null,"date_added":"27-09-2019","tags":{"0":"bharat2002","1":"easy","2":"expp2019"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EXUNC","time":{"view_start_date":1571142600,"submit_start_date":1571142600,"visible_start_date":1571142600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXUNC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Given an array $A$ with $N$ positive integers - $(A_1, A_2, \ldots, A_N)$.

A partition of the array into subarrays refers to dividing the entire array into subarrays (ie. some continuous elements) such that each of the $N$ elements is in exactly one subarray.

We call a partition of the array into subarrays as Valid, if this condition holds true: For all $i$, if $i$ and $i+1$ are in the same subarray then $A_{i+1}$ must be divisible by $A_i$.

Now, among all such Valid partitions, we are interested in the partition with the minimum number of subarrays. It can be proved that there is a unique such partition. We will be interested only with this partition in the problem.

We call $S_i$ the index of the subarray in which element $i$ lies. 

We now want to support some operations on the array. In particular, there are $Q$ operations of the form - 
* $1$ $i$  $X$ - Change $A_i$ to $X$ 
* $2$  $i$ - Given $i$ , output the smallest $j$ such that $S_i = S_j$. That is, the leftmost index which belongs to the same subarray as the i-th element.


###Input:

- First line will contain $N$ and $Q$ denoting the size of $A$ and number of operations respectively.
- The second line contains $N$ values, the initial values of $A$.
- The next $Q$ lines contain the operations as stated above.

###Output:
- The answer for each query of type 2 on a new line.

###Constraints 
- $1 \leq N \leq 10^6$
- $1 \leq Q \leq 2*10^5$
- $1 \leq i \leq N$
- $1 \leq A_i, X \leq 10^6$

###Subtasks
- 30 points :  $A_i \neq A_{i+1}$ for $1 \leq i\leq N-1$. This holds throughout, even after updates.
- 70 points : Original constraints

###Sample Input:
```
5 5
2 2 7 14 14
1 1 3
1 2 6
2 2
2 4
2 5
```

###Sample Output:
```
1
3
3
```

###Explanation:
Initially, $A=[2, 2, 7, 14, 14]$ and $S=[1, 1, 2,  2, 2]$ ( $A_2$ is divisible by $A_1$, $A_3$ is not divisible by $A_2$, $A_4$ is divisible by $A_3 $, $A_5$ is divisible by $A_4$ )

After the first operation $A=[3, 2, 7, 14, 14]$  and $S=[1, 2, 3,  3, 3]$  ($A_1$ is 3 now and $A_2 \mod A_1 ≠ 0$ now)

After the second operation $A=[3, 6, 7, 14, 14]$ and $S=[1, 1, 2,  2, 2]$  ($A_2$ is 6 now and $A_2$ is divisible by $A_1$ once again)

For the queries, we can look at the $S_i$ value for the given index and find the smallest index with the same value. Note here that the exact value of $S_i$ is irrelevant. We just want the first element of the same chain. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>