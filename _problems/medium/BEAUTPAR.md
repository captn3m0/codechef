---
{"category_name":"medium","problem_code":"BEAUTPAR","problem_name":"Beautiful Partitions","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"teja349","problem_tester":null,"date_added":"12-10-2019","tags":{"0":"teja349"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BEAUTPAR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Sidaga calls a sequence *beautiful* if the sum of elements of this sequence is strictly positive.

Kaspers gave Sidaga a sequence $A_1, A_2, \ldots, A_N$ and asked him to partition it into exactly $K$ non-empty **contiguous** subsequences such that each element of $A$ belongs to exactly one subsequence and all $K$ subsequences are beautiful.

Sidaga is getting ready for his wedding - he is busy learning how to dance, so he cannot solve this problem. Can you help him?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to partition $A$ into $K$ contiguous subsequences or `"NO"` otherwise.

If it is possible to partition $A$, print a second line containing $K$ space-separated integers $B_1, B_2, \ldots, B_K$ denoting the sizes of the subsequences, where $1 \le B_i$ for each valid $i$ and $B_1 + B_2 + \ldots + B_K = N$. The first $B_1$ elements of $A$ belong to the first subsequence, the next $B_2$ elements belong to the second subsequence and so on.

If there is more than one solution, you may print any one.

### Constraints
- $1 \le T \le 1,000$
- $1 \le K \le N \le 5 \cdot 10^5$
- $0 \le |A_i| \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$ 

### Example Input
```
2
4 2
2 -1 1 3 
2 2
1 -1
```

### Example Output
```
YES
1 3
NO
```

### Explanation
**Example case 1:**

In first case, there are more than one options. Another such valid option is {2,2}.

In second case, it is not possible.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>