---
{"category_name":"easy","problem_code":"RECNDORO","problem_name":"Chef and Or","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"31-12-2019","tags":{"0":"bit","1":"easy","2":"prefix","3":"rc122020","4":"rishup_nitdgp","5":"rishup_nitdgp","6":"sachin_yadav"},"problem_difficulty_level":"Easy-Medium","best_tag":"Prefix Suffix","editorial_url":"https://discuss.codechef.com/problems/RECNDORO","time":{"view_start_date":1588010400,"submit_start_date":1588010400,"visible_start_date":1588010400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RECNDORO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef has a circular sequence $A$ of $N$ non-negative integers $A_1, A_2, \ldots, A_N$ where $A_i$ and $A_{i+1}$ are considered adjacent, and elements $A_1$ and $A_N$ are considered adjacent.

An operation on position $p$ in array $A$ is defined as replacing $A_p$ by the bitwise OR of elements adjacent to $A_p$. Formally, an operation is defined as:
- If $p = 1$, replace $A_1$ with $A_N | A_{2}$
- If $1 < p < N$, replace $A_p$ with $A_{p-1} | A_{p+1}$
- If $p = N$, replace $A_N$ with $A_{N-1} | A_1$

Here, '|' denotes the [bitwise OR operation](https://en.wikipedia.org/wiki/Bitwise_operation#OR).

Now, Chef must apply operations at each position **exactly once**, but he may apply the operations in any order.

Being a friend of Chef, you are required to find a sequence of operations, such that after applying all the $N$ operations, the bitwise OR of the resulting array is $K$, or determine that no such sequence of operations exist.

###Input:
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$ denoting the number of elements, and the required bitwise OR after operations.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

###Output:
For each test case, if no valid sequence of operations exist, print -1.
Otherwise, print $N$ space-separated integers in which $i$-th integer denote the position chosen in the $i$-th operation. If there are multiple valid sequences of operations, you may print any valid sequence.

###Constraints 
- $1 \le T \le 10^5$
- $3 \le N \le 2*10^5$
- $0 \le A_i, K \le 10^9$
- It's guaranteed that the total length of the arrays in one test file doesn't exceed $10^6$

###Sample Input:
```
5
3 6
2 1 6
3 6
2 1 5
3 7
2 4 6
3 7
1 2 4
3 7
1 2 6
```

###Sample Output:
```
2 1 3
-1
-1
-1
2 3 1
```

### Explanation:
In the first test case, initially, the sequence is **{2, 1, 6}**. 
- Chef applies the operation on the $2^{nd}$ index, so the sequence converts to **{2, 6, 6}**.
- Next, Chef applies the operation on the $1^{st}$ index, so the sequence converts to **{6, 6, 6}**.
- Next, Chef applies the operation on the $3^{rd}$ index, and this time sequence does not change.

The final sequence is **{6, 6, 6}**, and bitwise **OR** of this sequence is $6$ that is equal to given $K$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>