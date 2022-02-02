---
{"category_name":"medium","problem_code":"CLPS","problem_name":"4 - Collapse The Array","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jatin_adm","problem_tester":"","date_added":"12-10-2020","tags":{"0":"jatin_adm"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLPS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Ayush has an array $a$ of $n$ integers. He wants to collapse the entire array into a single element. To do this, he can perform the operation described below any number of times. Each operation grants some points, and Ayush's total score will be the sum of the points granted over all operations he performs.

Let $a[i..j]$ denote the subarray of $a$ starting at index $i$ and ending at $j$. Define $min_{i, j}$ to be the minimum value in $a[i..j]$. 

In one operation he can do the following:
- Select any subarray $a[i..j]$ of $a$ of size at least $2$ and replace this subarray by a single element equal to the sum of elements of the subarray.

The number of points granted by such an operation, which will be added to his total score, is $(j - i + 1) \cdot min_{i, j}$.

For example, consider an array $a = [2, 3, 5]$. If he selects the subarray $a[1..2]$, his total score increases by $2 \cdot 2 = 4$ points. Now $a = [5, 5]$.

Ayush performs operations until only a single element remains. Help Ayush determine the maximum possible total score he can receive.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each testcase contains $n$, the size of the array $a$.
- The next $n$ lines contains $n$ integers $a_1, a_2, \ldots, a_n$.

###Output:
For each testcase, output in a single line  the maximum score possible when a single element remains.

###Constraints 
- $1 \leq T \leq 5$
- $2 \leq n \leq 60$
- $-10^9 \leq a_i \leq 10^9$ for all valid $i$

###Subtasks
- **Subtask #1 (8 points)** : $2 \leq n \leq 8$
- **Subtask #2 (16 points)** : $ 2 \leq n \leq 16$
- **Subtask #3 (29 points)**  : $ 2 \leq n \leq 40$
- **Subtask #4 (15 points)** : $0 \leq a_i \leq 10^9 $ for all valid $i$
- **Subtask #5 (32 points)** : No additional constraints

###Sample Input:
    2
    4
    1 2 3 4
    5
    -1 -2 -3 -4 -5


###Sample Output:
    16
    -24
	
###EXPLANATION:

The optimal solution in the first testcase is:

$[1, 2, 3, 4] \xrightarrow[+2 \cdot 1]{a[1..2]} [3, 3, 4] \xrightarrow[+2 \cdot 3]{a[1..2]} [6, 4] \xrightarrow[+2 \cdot 4]{a[1..2]} [10]$

The optimal solution in the second testcase is:

$[-1,-2,-3,-4,-5] \xrightarrow[+2 \cdot (-2)]{a[1..2]} [-3,-3,-4,-5] \xrightarrow[+4 \cdot (-5)]{a[1..4]}[-15]$
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>