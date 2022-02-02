---
{"category_name":"easy","problem_code":"CKISSHUG","problem_name":"Kisses \u0026 Hugs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"laycurse","date_added":"12-04-2012","tags":{"0":"exponentiation","1":"kaushik_iska","2":"maths","3":"matrix","4":"sep12"},"editorial_url":"http://discuss.codechef.com/problems/CKISSHUG","time":{"view_start_date":1347356059,"submit_start_date":1347356059,"visible_start_date":1347355800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><div>
    <p>
        Princess Artapoelc greeted her guests by either kissing on the cheek (<b>K</b>) or hugging (<b>H</b>). From the first guest 

she kisses, she has a
compulsion to necessarily kiss every alternate guest from that first kissed guest. That is if the guests are <b>G</b><sub>1</sub>, 

<b>G</b><sub>2</sub>, ..., <b>G</b><sub>i</sub>, <b>G</b><sub>i+1</sub>, ..., <b>G</b><sub>n</sub> and if she first kissed <b>G</b><sub>i</sub> then she must necessarily kiss 

<b>G</b><sub>i+2</sub>, <b>G</b><sub>i+4</sub>, <b>G</b><sub>i+6</sub> ... till the last
        possible guest. Your task is to determine in how many ways she can greet <b>N</b> guests.
    </p>
    <p>
        <b>Input</b>
    </p>
    <p>First line of the input contains <b>T (T ≤ 1000) </b>denoting the number of test cases.</p>
    <p>
        <b>T</b>
        lines follow each containing a single integer <b>N (1 ≤ N ≤ 10^9) </b>denoting the number of guests.
    </p>
    <p>
        <b></b>
    </p>
    <p>
        <b>Output</b>
    </p>
    <p>
        For each case the output should be a single integer representing the number of ways Artapoelc can greet <b>N </b>guests. As the 

answer can be large
        print it modulo <b>1000000007</b>.
    </p>
    <p>
        <b></b>
    </p>
    <p>
        <b>Example</b>
    </p>
    <p>
        <b></b>
    </p>
    <p>
        <b>Input</b>
    </p>
    <pre>
3
1
2
3
    </pre>
    <p>
        <b></b>
    </p>
    <p>
        <b>Output</b>
    </p>
    <pre>
2
4
6
   </pre>
    <p>
        <b>Explanation:</b>
    </p>
    <p>
        In the first case the possible ways are
    </p>
    <p>
        K, H
    </p>
    <p>
        Second case:
    </p>
    <p>
        KH, HK, HH, KK
    </p>
    <p>
        Third case:
    </p>
    <p>
        HHH, HHK, HKH, HKK, KHK, KKK
    </p>
</div>