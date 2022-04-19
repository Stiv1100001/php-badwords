<?php 
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat leo ac tellus maximus dictum. Fusce libero dui, convallis id lectus vitae, tincidunt euismod turpis. Morbi convallis odio volutpat, pellentesque enim vel, convallis tellus. Nunc elementum odio non orci condimentum porttitor. Vivamus semper lectus ut laoreet porta. Nullam ipsum dolor, bibendum at erat et, maximus laoreet metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque congue cursus tortor a consectetur. Sed mollis in nisi sit amet rhoncus. Sed semper risus ac tristique sodales. Praesent metus orci, semper et cursus ut, pharetra eget urna. Vestibulum at malesuada justo.

    Sed quis enim eros. Vivamus rhoncus aliquet ipsum, ut imperdiet lorem cursus id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean convallis, ipsum ut blandit scelerisque, est ante vestibulum lectus, ac fringilla leo ex eget magna. Pellentesque blandit congue tempor. Maecenas dapibus sem at lorem posuere, nec blandit lectus pharetra. Nulla sed magna ultricies, convallis odio sed, auctor libero. Pellentesque id ligula dapibus, scelerisque dolor varius, tristique odio. Morbi pretium molestie nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

    Quisque a lobortis justo, nec sagittis est. Nullam fringilla risus ac lorem mattis, sed imperdiet enim fringilla. Duis finibus tellus non vestibulum suscipit. Praesent risus tellus, sodales vel lacinia quis, euismod et erat. Donec ut magna vitae quam dictum gravida. Vivamus elit ante, finibus eu lacus id, mollis efficitur eros. Donec arcu turpis, malesuada id nisl a, iaculis pulvinar ligula. Sed nec nisi quis enim luctus dignissim. Mauris quis gravida velit. Nunc sagittis sit amet magna at tristique. Mauris at metus at diam consequat commodo nec a dolor. In hac habitasse platea dictumst. Vestibulum volutpat odio ut neque molestie eleifend.

    Duis placerat diam massa, at euismod tellus lobortis fermentum. Etiam vel ullamcorper nulla, in consectetur ligula. Aliquam erat volutpat. Pellentesque mauris nulla, consequat vitae malesuada in, rutrum vel nulla. Nam felis purus, iaculis nec metus et, facilisis suscipit urna. Suspendisse potenti. Nulla varius quam velit, ac mollis dui lacinia eget. Proin luctus sem non mi accumsan accumsan. Duis a suscipit quam. Ut sed velit quis ipsum tristique porttitor eget et justo.

    Pellentesque maximus tellus eget orci venenatis, ac porta nisi posuere. In consequat turpis magna. Donec ut augue laoreet, finibus felis ac, dictum nisl. Donec blandit lacus at ex euismod fringilla. Aenean pharetra efficitur consequat. Cras vestibulum velit id lobortis rhoncus. Morbi orci arcu, ullamcorper vel risus et, eleifend tincidunt sapien. Vestibulum ultrices enim felis, sit amet iaculis lorem dictum quis.";

    $toCensor = $_GET['cens'] ?? "";

    var_dump($text);
    var_dump(strlen($text));
    var_dump(str_replace($toCensor, "***", $text));
?>
