---
{"category_name":"easy","problem_code":"THREE","problem_name":"Three Letters","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\nabcd\r\ncodechef","output":"0\r\n2","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/cb-ZRQt0oog","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sahi1422","problem_tester":"","date_added":"20-12-2020","tags":{"0":"ltime91","1":"sahi1422","2":"simple","3":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/THREE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=THREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME91/hindi/THREE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME91/bengali/THREE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME91/mandarin/THREE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME91/russian/THREE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME91/vietnamese/THREE.pdf) as well.

You are given a string $S$. You can get a coin by choosing and removing three characters from $S$ if the chosen characters form a palindrome in some order (possibly different from their order in the string). This operation may be performed repeatedly on the resulting string. Find the maximum number of coins you can get.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$.

### Output
For each test case, print a single line containing one integer ― the maximum number of coins you can get.

### Constraints
- $1 \leq T \leq 10$
- $1 \leq |S| \leq 10^5$
- $S$ contains only lowercase English letters

### Subtasks
**Subtask #1 (20 points):** $S$ contains only letters 'a' and 'b'

**Subtask #2 (20 points):**
- $1 \leq |S| \leq 100$
- $S$ contains only letters 'a', 'b' and 'c'

**Subtask #3 (60 points):** original constraints

### Example Input
```
2
abcd
codechef
```

### Example Output
```
0
2
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>