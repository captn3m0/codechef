---
{"category_name":"medium","problem_code":"BEAUAR","problem_name":"Beauty and The Array","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"msi_cse_buet","problem_tester":null,"date_added":"5-12-2019","tags":{"0":"msi_cse_buet"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1578249000,"submit_start_date":1578249000,"visible_start_date":1578249000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BEAUAR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Let’s define a function score:
$$Score(p[1...m], q[1...m]) = \sum_{i = 1}^{m} (m - i + 1) * p[i] + q[i]$$
Let’s define Beauty of an array:
$$Beauty(p[1...n], q[1...n]) = max_{1 \le i \le j \le n} Score(p[i...j], q[i...j])$$
Here $p[i...j]$ means sub-array of p starting from $i$-th position and ending at $j$-th position.

You are given two arrays $A$ and $B$ of $n$ integers. You can do the following operation any number of times, possibly zero.
- Perform a left circular rotation on **both** of the arrays simultaneously i.e move the first  element of each array to the last position and shift all remaining elements one position left. For example, If an array is $\{1, 5, 3, 2\}$ and you perform left circular rotation once, then the array will become $\{5, 3, 2, 1\}$ . If you perform the operation again, the array will become $\{3, 2, 1, 5\}$.

You need to maximize the value $Beauty(A, B)$.

Please note that, in one operation, you can't perform a left circular rotation on only one array, you must perform it on both of them.

**Note**: Because of large I/O, please use fast I/O methods.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- Each test case consists of 3 lines:
    - First line contains $n$, number of elements of the array.
    - Next line contains $n$ space separated integers, denoting elements of the array $A$.
    - Next line contains $n$ space separated integers, denoting elements of the array $B$.

### Output
For each testcase, output in a single line answer for that test case, which is the maximum $Beauty(A, B)$ that can be achieved.

### Constraints 
- $1 \le T \le 10$
- $1 \le n \le 2^{17}$
- $0 \le |A_i|, |B_i| \le 2^{17}$

### Example Input
```
1
5
-1 3 -8 -1 4
3 1 -2 3 -10
```

### Example Output
```
7
```

### Explanation
In the sample test, to get the maximum beauty value $(7)$, you have to perform the left circular operation $2$ times. Then the arrays will be : 
- $A = \{-8, -1, 4, -1, 3\}$
- $B = \{-2, 3, -10, 3, 1\}$.

If we now pick $i = 3, j = 5$, we get $Score(A[3...5], B [3...5]) = 7.$    
This is the maximum that we can obtain. So, $Beauty(A, B) = 7$
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>