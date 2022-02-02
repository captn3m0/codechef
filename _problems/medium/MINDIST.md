---
{"category_name":"medium","problem_code":"MINDIST","problem_name":"Minimize the Distance","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"msi_cse_buet","problem_tester":null,"date_added":"28-11-2019","tags":{"0":"msi_cse_buet"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1578249000,"submit_start_date":1578249000,"visible_start_date":1578249000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MINDIST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given two line segments $\mathsf{AB}$ and $\mathsf{CD}$ in $N$-dimensional space. Find the minimum distance between them, i.e. the minimum distance $\mathsf{|PQ|}$ over all points $\mathsf{P} \in \mathsf{AB}$ and $\mathsf{Q} \in \mathsf{CD}$.

**Note**: Because of large I/O, please use fast I/O methods.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$ denoting the coordinates of the point $\mathsf{A}$.
- The third line contains $N$ space-separated integers $b_1, b_2, \ldots, b_N$ denoting the coordinates of the point $\mathsf{B}$.
- The fourth line contains $N$ space-separated integers $c_1, c_2, \ldots, c_N$ denoting the coordinates of the point $\mathsf{C}$.
- The fifth line contains $N$ space-separated integers $d_1, d_2, \ldots, d_N$ denoting the coordinates of the point $\mathsf{D}$.

### Output
For each query, print a single line containing one real number - the minimum distance between the line segments. Your output will be considered correct if the absolute or relative error does not exceed $10^{-12}$.

### Constraints
- $1 \le T \le 10^5$
- $3 \le N \le 10^5$
- $0 \le a_i, b_i, c_i, d_i \le 1,000$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
2
3
879 130 645
214 801 973
487 518 681
186 74 684
3
810 702 731
598 325 737
158 871 316
336 999 983
```

### Example Output
```
146.899739355990
587.980716360221
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>