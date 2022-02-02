---
{"category_name":"school","problem_code":"VISA","problem_name":"Chefland Visa","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/enRDMIazixA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"9-06-2021","tags":{"0":"cakewalk","1":"cook130","2":"daanish_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/VISA","time":{"view_start_date":1624214704,"submit_start_date":1624214704,"visible_start_date":1624214704,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VISA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK130/mandarin/VISA.pdf), [Russian](https://www.codechef.com/download/translated/COOK130/russian/VISA.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK130/vietnamese/VISA.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK130/bengali/VISA.pdf) as well.

Ash is trying to get visa to Chefland. For the visa to be approved, he needs to satisfy the following three criteria:
- Solve at least $x_1$ problems on Codechef.
- Have at least $y_1$ current rating on Codechef.
- Make his last submission at most $z_1$ months ago.

You are given the number of problems solved by Chef ($x_2$), his current rating ($y_2$) and the information that he made his last submission $z_2$ months ago. Determine whether he will get the visa.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains six space-separated integers $x_1$, $x_2$, $y_1$, $y_2$, $z_1$ and $z_2$.

### Output
For each test case, print a single line containing the string `"YES"` if Chef will get the visa or `"NO"` if he will not.

You may print each character of the string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints
- $1 \leq T \leq 5,000$
- $20 \leq x_1, x_2 \leq 50$
- $1,900 \leq y_1, y_2 \leq 2,100$
- $1 \leq z_1, z_2 \leq 6$

### Example Input
```
4
20 50 2100 1900 6 6
50 20 1900 1900 5 5
20 20 1900 1900 1 6
27 27 1920 1920 3 3
```

### Example Output
```
NO
NO
NO
YES
```
	
### Explanation
**Example case 1:** Chef's rating is less than the minimum required rating.

**Example case 2:** Chef has solved a smaller number of problems than the minimum required number.

**Example case 3:** Chef's last submission was made before the allowed period.

**Example case 4:** All three conditions are met.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>