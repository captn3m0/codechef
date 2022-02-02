---
{"category_name":"medium","problem_code":"XX","problem_name":"Magical Coins","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"11 3 1 0 499122177","output":"499122182 33 249561300","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"zankanotachi","problem_tester":"","date_added":"23-04-2021","tags":{"0":"expected","1":"generating","2":"ltime95","3":"medium","4":"zankanotachi"},"problem_difficulty_level":"Medium-Hard","best_tag":"Generating Functions","editorial_url":"https://discuss.codechef.com/problems/XX","time":{"view_start_date":1619802000,"submit_start_date":1619802000,"visible_start_date":1619802000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are shopping in a store that has $n$ magical stones. For each stone, there is a probability $g$ that you will put it in your bag. The value $g$ is the same for all stones, all stones are independent, and you are given the value of $g$ modulo $998\ 244\ 353$.

Suppose when you checkout, you have $r$ stones in your bag. Then you will be charged a price of $(ar+b)^k$ magical coins, where $a, b, k$ are constants. What is the expected value of the price you will pay, for all $1\leq k\leq k_{\max}$? Find the expected values modulo $998\ 244\ 353$.

###Input
- The first line contains five integers $n$, $k_{\max}$, $a$, $b$, $g$

###Output
- For all $1\le k\le k_{\max}$, print the expected value of the price modulo $998\ 244\ 353$.

###Constraints
- $1\leq n\leq 10^9$
- $1\leq k_{\max}\leq 5\cdot10^5$
- $1\leq a\leq 998\ 244\ 352$
- $0\leq b\leq 998\ 244\ 352$
- $1\leq g\leq 998\ 244\ 352$

###Subtasks
**Subtask #1 (5 points):**
- $1\leq n\leq 1000$
- $1\leq k_{\max}\leq 1000$

**Subtask #2 (20 points):**
- $1\leq n\leq 10^9$
- $1\leq k_{\max}\leq 100$

**Subtask #3 (50 points):**
- $1\leq n\leq 10^9$
- $1\leq k_{\max}\leq 5\cdot 10^4$

**Subtask #4 (25 points):**
original constraints

###Sample Input
    11 3 1 0 499122177

###Sample Output
    499122182 33 249561300


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>