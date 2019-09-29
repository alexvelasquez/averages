<template>
    <div >
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">{{name}}</a>
        </li>
        <li class="breadcrumb-item active">{{action}}</li>
        </ol>
    </div>
</template>
<script>
export default {
    props: {
        name: String,
        action:String
    }
}
</script>