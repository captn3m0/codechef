---
{"category_name":"school","problem_code":"HTMLTAGS","problem_name":"HTML Tags","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/8d6rCizCkKY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"singlabharat","problem_tester":"","date_added":"6-06-2021","tags":{"0":"cakewalk","1":"ltime97","2":"singlabharat"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HTMLTAGS","time":{"view_start_date":1624727702,"submit_start_date":1624727702,"visible_start_date":1624727702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HTMLTAGS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME97/mandarin/HTMLTAGS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME97/bengali/HTMLTAGS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME97/russian/HTMLTAGS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME97/vietnamese/HTMLTAGS.pdf) as well.

In addition to CP, Chef recently developed an interest in Web Development and started learning HTML. Now he wants to create his own HTML Code Editor. As a subproblem, he wants to check if a typed HTML closing tag has correct syntax or not.

A closing HTML tag **must**:
- Start with `"</"`
- End with `">"`
- Have only lower-case alpha-numeric characters as its body (between `"</"` and `">"`). That is, each character of the body should either be a digit or a lower-case English letter.
- Have a non-empty body.

Help Chef by printing `"Success"` if the tag is fine. If not, print `"Error"`.

### Input

- The first line contains an integer $T$, the number of test cases. Then $T$ test cases follow. 
- Each test case is a single line of input, a string describing the tag we need to check.

### Output
For each test case, output in a single line, `"Success"` if it is a valid closing tag and `"Error"` otherwise (without quotes).

You may print each character of the string in uppercase or lowercase (for example, the strings `"SuccEss"`, `"success"`, `"Success"`, `"SUCCESS"` et cetera will all be treated as identical).

### Constraints 
- $1 \leq T \leq 1000$
- $1 \leq$ $\mathrm{length}(\mathrm{Tag})$ $\leq 1000$
- The characters of the string belong to the ASCII range $[33, 126]$ (note that this excludes space.)

###Subtasks
**Subtask #1 (100 points):** Original constraints

### Sample Input
```
5 
</h1>  
Clearly_Invalid  
</singlabharat>  
</5>  
<//aA>  
```

### Sample Output
```
Success  
Error  
Success
Success
Error
```

### Explanation
**Test Cases $1, 3, 4$:** The tags follow all mentioned constraints.

**Test Case $2$:** The tag doesn't contain opening and closing symbols and also includes characters other than lower-case alpha-numeric characters in its body.

**Test Case $5$:** The tag also includes an upper-case alpha-numeric character `"A"` and a non alpha-numeric character `"/"` in its body.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>