---
{"category_name":"school","problem_code":"PASSWD","problem_name":"Password","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n#cookOff#P1\r\nU@code4CHEFINA\r\ngR3@tPWD","output":"NO\r\nYES\r\nNO","explanation":"**Example case 1:** Condition $3$ is not satisfied, because the only digit is not strictly inside.\r\n\r\n**Example case 2:** All conditions are satisfied.\r\n\r\n**Example case 3:** Condition $5$ is not satisfied, because the length of this string is 8.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/dats3tzH-VY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"23-01-2021","tags":{"0":"cakewalk","1":"cook126","2":"daanish_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PASSWD","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PASSWD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK126/hindi/PASSWD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK126/mandarin/PASSWD.pdf), [Russian](https://www.codechef.com/download/translated/COOK126/russian/PASSWD.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK126/vietnamese/PASSWD.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK126/bengali/PASSWD.pdf) as well.

Chef is planning to setup a secure password for his Codechef account. For a password to be secure the following conditions should be satisfied:

1) Password must contain at least one lower case letter $[a-z]$;

2) Password must contain at least one upper case letter $[A-Z]$ strictly inside, i.e. not as the first or the last character;

3) Password must contain at least one digit $[0-9]$ strictly inside;

4) Password must contain at least one special character from the set $\{$ '@', '\#', '%', '&', '?' $\}$ strictly inside;

5) Password must be at least $10$ characters in length, but it can be longer.

Chef has generated several strings and now wants you to check whether the passwords are secure based on the above criteria. Please help Chef in doing so.

### Input

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, string $S$. 

### Output
For each testcase, output in a single line "YES" if the password is secure and "NO" if it is not.

### Constraints 
- $1 \leq |S| \leq 20$
- All the characters in $S$ are one of the following: lower case letters $[a-z]$, upper case letters $[A-Z]$, digits $[0-9]$, special characters from the set $\{$ '@', '\#', '%', '&', '?' $\}$
- Sum of length of strings over all tests is atmost $10^6$

### Example Input
```
3
#cookOff#P1
U@code4CHEFINA
gR3@tPWD
```

### Example Output
```
NO
YES
NO
```
	
### Explanation
**Example case 1:** Condition $3$ is not satisfied, because the only digit is not strictly inside.

**Example case 2:** All conditions are satisfied.

**Example case 3:** Condition $5$ is not satisfied, because the length of this string is 8.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>