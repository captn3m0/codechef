---
{"category_name":"medium","problem_code":"BALLSUM","problem_name":"Colorful Balloons","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rumblefool","problem_tester":null,"date_added":"28-11-2019","tags":{"0":"rumblefool"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1575801000,"submit_start_date":1575801000,"visible_start_date":1575801000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BALLSUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
It's Alan's birthday. He is looking for balloons to decorate his house. He visits a shop which has many coloured balloons numbered $1$ to $n$ arranged in a row. The colour of each balloon can be represented as an integer between $1$ and $n$. Alan only wants to pick up a **contiguous subsequence** of these balloons. However, the total cost of a set of balloons is calculated in a strange way: $\sum_{i=1}^{n} cnt_i^k$ where $cnt_i$ is the number of balloons of $i^{th}$ colour in the set.

Find the total cost of all possible sets of balloons that can be bought by Alan. Two sets of balloons are considered different if there is a balloon numbered  $i$  which is present in one set but not in the other. Since the answer can be huge, output the value modulo $10^9+7$.

### Input
- The first line of the input consists of two integers $n$ and $k$. The next line consists of $n$ integers where the $i^{th}$ integer denotes the colour of the balloon numbered $i$.

### Output
For each test case, print a single line containing one integer: total cost modulo $10^9+7$.

### Constraints 
- $1 \le n, k \le 200000$

### Example Input
```
3 2
1 2 1
```

### Example Output
```
12
```

### Explanation
Alan can buy the following sets of balloons:
$(1)$, $(2)$, $(3)$ with cost $1$ each;
$(1,2)$, $(2,3)$ with cost $2$ each;
$(1,2,3)$ with cost $5$.

Hence the total cost is $12$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>