---
{"category_name":"school","problem_code":"GVAWAY","problem_name":"Is This a Give Away","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/zBO0fU0qpG0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"msi_cse_buet","problem_tester":"","date_added":"5-12-2019","tags":{"0":"msi_cse_buet"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GVAWAY","time":{"view_start_date":1578249000,"submit_start_date":1578249000,"visible_start_date":1578249000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GVAWAY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given two integers $l$ and $r$.    
You have to choose $k$ **real** numbers in the interval $[ l, r ]$ uniform randomly.   
What is the expected count of distinct numbers chosen by you?   

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $l$, $r$ and $k$.

### Output
For each test case, print a single line containing one integer - the expected count of distinct numbers chosen. It can be proved that the expected count is always an integer.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le k \le 100$
- $1 \leq l \leq r \leq 100$

### Example Input
```
3
3 6 4
1 3 1
6 7 2
```

### Example Output
```
4
1
2
```

### Explanation
**Example case 2:** You choose only $1$ real number, so it doesn't matter which real number you chose, number of distinct number is always $1$. So expected count of distinct number is $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>